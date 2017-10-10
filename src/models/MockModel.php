<?php
class MockModel{

    private $_pdo;
    private static $link = null;
    private $perpage = 10;

    /**
     * Constructor
     */
    public function __construct($_pdo)
    {
        if (!is_null(self::$link))
            return self::$link;

        self::$link = $this;
        $this->_pdo = $_pdo;
    }

    protected function pdoSet($data)
    {
        $res = [];
        foreach ($data as $name => $value) {
            if (is_numeric($value))
                $res[] = '`' . $name . '` = ' . $value;
            else if (is_bool($value))
                $res[] = '`' . $name . '` = ' . ($value ? 'true' : 'false');
            else if (is_array($value))
                $res[] = '`' . $name . '` = ' . $this->_pdo->quote(serialize($value));
            else // string
                $res[] = '`' . $name . '` = ' . $this->_pdo->quote($value);
        }
        return implode(', ', $res);
    }


    protected function calcPages($current, $count)
    {
        $max_page = ceil($count / $this->perpage) - 1;
        if ($current < 0)
            $current = 0;
        elseif ($current > $max_page)
            $current = $max_page;
        $pages = [];

        if ($max_page > 0){
            if($max_page <= 4){
                for($i=0;$i<=$max_page;$i++){
                    $pages[$i] = $i + 1;
                }
            }else{
                if($current < 3){
                    for($i=0;$i<=4;$i++){
                        $pages[$i] = $i + 1;
                    }
                }elseif ($current>($max_page-3)){
                    for($i=$max_page-4;$i<=$max_page;$i++){
                        $pages[$i] = $i + 1;
                    }
                }else{
                    for ($i=$current-2;$i<=$current+2;$i++){
                        $pages[$i] = $i + 1;
                    }
                }
            }
        }

        return [
            'pages' => $pages,
            'current' => $current,
            'max' => $max_page,
            'count' => $count
        ];
    }

    public function getMockList($page=0,$url=''){
        if($url!=''){
            $url = "%$url%";
            $stm = $this->_pdo->prepare('SELECT COUNT(*) AS "count" FROM `mock_master` where `del_flag`=0 AND `url` like ?;');
            $stm->bindParam(1, $url, PDO::PARAM_STR);
            $stm->execute();
            $res['count'] = $stm->fetchColumn();
            if ($res['count'] === false){
                return $res;
            }
            //页码
            $res['pagination'] = $this->calcPages($page, $res['count']);
            $limit = [$res['pagination']['current'] * $this->perpage, $this->perpage];
            $stm = $this->_pdo->prepare('select `mock_id`,`url`, `type`, `common`, `del_flag` from `mock_master` WHERE `del_flag`=0 AND `url` LIKE :l3 order by mock_id desc limit :l1,:l2;');
            $stm->bindParam(':l1', $limit[0], PDO::PARAM_INT);
            $stm->bindParam(':l2', $limit[1], PDO::PARAM_INT);
            $stm->bindParam(':l3', $url, PDO::PARAM_STR);
            $stm->execute();
            $res['data'] =  $stm->fetchAll();
            return $res;
        }
        $stm = $this->_pdo->prepare("SELECT COUNT(*) AS 'count' FROM `mock_master` where `del_flag`=0");
        $stm->execute();
        $res['count'] = $stm->fetchColumn();
        if ($res['count'] === false){
            return $res;
        }
        //页码
        $res['pagination'] = $this->calcPages($page, $res['count']);
        $limit = [$res['pagination']['current'] * $this->perpage, $this->perpage];
        $stm = $this->_pdo->prepare('select `mock_id`,`url`, `type`, `common`, `del_flag` from `mock_master` WHERE `del_flag`=0 order by mock_id desc limit :l1,:l2;;');
        $stm->bindParam(':l1', $limit[0], PDO::PARAM_INT);
        $stm->bindParam(':l2', $limit[1], PDO::PARAM_INT);
        $stm->execute();
        $res['data'] =  $stm->fetchAll();
        return $res;
    }

    public function getMockDetail($id){
        $stm = $this->_pdo->prepare("select * from `mock_master` WHERE `mock_id`=? LIMIT 1");
        $stm->bindParam(1, $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }

    public function delete($id){
        $stm = $this->_pdo->prepare( 'UPDATE `mock_master` SET `del_flag`=1 WHERE `mock_id`=?;');
        $stm->bindParam(1, $id, PDO::PARAM_INT);
        $r = $stm->execute();
        if($r === false){
            return false;
        }else{
            return true;
        }
    }
    public function queryByUrl($qUrl){
        $stm = $this->_pdo->prepare("select url from `mock_master` WHERE `url` LIKE ? LIMIT 10");
        $stm->bindParam(1, "%$qUrl%", PDO::PARAM_STR);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function saveMock($id, $data){
        $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        if(is_null($id)){
            $stm = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($data), 'INSERT INTO `mock_master` SET :values'));
            $r = $stm->execute();
            $id = $this->_pdo->lastInsertId();
            if($r === false){
                return false;
            }else{
                return $id;
            }
        }else{
            $stm = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($data), 'UPDATE `mock_master` SET :values WHERE `mock_id`=?;'));
            $stm->bindParam(1, $id, PDO::PARAM_INT);
            $r = $stm->execute();
            if($r === false){
                return false;
            }else{
                return true;
            }
        }
    }

    public function addMockMapping($data){
        $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        $stm = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($data), 'INSERT INTO `mock_mapping` SET :values'));
        $r = $stm->execute();
        if($r === false){
            return false;
        }else{
            return true;
        }
    }

    public function findmMappingIp($mockId){
        $stm = $this->_pdo->prepare("SELECT *  FROM `mock_mapping` where `mock_id`=?");
        $stm->bindParam(1, $mockId, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function findMockVar($detailId,$mockId){
        $stm = $this->_pdo->prepare("SELECT *  FROM `mock_var` where `detail_id`=? and `mock_id`=? ");
        $stm->bindParam(1, $detailId, PDO::PARAM_INT);
        $stm->bindParam(2, $mockId, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function varSave($id, $data){
        $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        if(is_null($id)){
            $stm = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($data), 'INSERT INTO `mock_var` SET :values'));
            $r = $stm->execute();
            $id = $this->_pdo->lastInsertId();
            if($r === false){
                return false;
            }else{
                return $id;
            }
        }else{
            $stm = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($data), 'UPDATE `mock_var` SET :values WHERE `id`=?;'));
            $stm->bindParam(1, $id, PDO::PARAM_INT);
            $r = $stm->execute();
            if($r === false){
                return false;
            }else{
                return true;
            }
        }
    }

    public function findResponse($mockId){
        $stm = $this->_pdo->prepare("SELECT MK.id,MK.mock_id,MK.response,MK.rule_flag,MK.del_flag,MK.tips,MR.id AS rule_id,MR.tips as mtips ,MM.timeout,MM.code_status,MR.`value`,MR.xpath,MR.response AS ruleResponse
                                    from mock_detail as MK 
                                    LEFT JOIN mock_mapping as MM on MK.id = MM.detail_id
                                    LEFT JOIN mock_rule as MR on MK.id = MR.detail_id
                                    WHERE MK.del_flag=0 AND MK.mock_id = ?  ORDER BY MK.id;");
        $stm->bindParam(1, $mockId, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll();
    }
    public function findResponseDetail($mockId){
        $stm = $this->_pdo->prepare("SELECT *  FROM `mock_detail` where `mock_id`=? AND `del_flag` = 0");
        $stm->bindParam(1, $mockId, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll();
    }
    public function getRuleResponse($detailId){
        $stm = $this->_pdo->prepare("SELECT *  FROM `mock_rule` where `detail_id`=? AND `del_flag` = 0");
        $stm->bindParam(1, $detailId, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function responseSave($id, $data){
        $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        if(is_null($id)){
            $stm = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($data), 'INSERT INTO `mock_detail` SET :values'));
            $r = $stm->execute();
            $id = $this->_pdo->lastInsertId();
            if($r === false){
                return false;
            }else{
                return $id;
            }
        }else{
            $stm = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($data), 'UPDATE `mock_detail` SET :values WHERE `id`=?;'));
            $stm->bindParam(1, $id, PDO::PARAM_INT);
            $r = $stm->execute();
            if($r === false){
                return false;
            }else{
                return true;
            }
        }
    }

    public function ruleResponseSave($id, $data,$ruledata,$ruleId){
        $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        if(is_null($id)){
            $stm = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($data), 'INSERT INTO `mock_detail` SET :values'));
            $r = $stm->execute();
            $id = $this->_pdo->lastInsertId();
            if($r === true){
                $ruledata['detail_id'] = $id;
                $stm1 = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($ruledata), 'INSERT INTO `mock_rule` SET :values'));
                $r1 = $stm1->execute();
                if($r1 === true){
                    return $id;
                }else{
                    return false;
                }
            }
        }else{
            if($ruleId == 0){
                $ruledata['detail_id'] = $id;
                $stm = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($ruledata), 'INSERT INTO `mock_rule` SET :values'));
                $r = $stm->execute();
            }else{
                $stm = $this->_pdo->prepare(str_replace(':values', $this->pdoSet($ruledata), 'UPDATE `mock_rule` SET :values WHERE `id`=?;'));
                $stm->bindParam(1, $ruleId, PDO::PARAM_INT);
                $r = $stm->execute();
            }
            if($r === false){
                return false;
            }else{
                return true;
            }
        }
    }

    public function findMapping($mockId, $ip){
        $stm = $this->_pdo->prepare("SELECT id,rule,rule_flag,mac_address as macAddress,timeout,mock_id as mockId,ip,detail_id AS detailId, del_flag delFlag,code_status as codeStatus FROM `mock_mapping` where `mock_id`=? AND `ip`=?");
        $stm->bindParam(1, $mockId, PDO::PARAM_INT);
        $stm->bindParam(2, $ip, PDO::PARAM_STR);
        $stm->execute();
        return $stm->fetch();
    }

    public function turnResponse($param, $flag){
        $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        if($flag == 1){
            $stm = $this->_pdo->prepare("UPDATE `mock_mapping` set `detail_id` = ? WHERE `id`=?");
            $stm->bindParam(1, $param['detailId'], PDO::PARAM_INT);
            $stm->bindParam(2, $param['mappingId'], PDO::PARAM_INT);
            $r = $stm->execute();
        }else{
            $stm = $this->_pdo->prepare("UPDATE `mock_mapping` set `detail_id` = '' WHERE `id`=?");
            $stm->bindParam(1, $param['mappingId'], PDO::PARAM_INT);
            $r = $stm->execute();
        }
        if($r === false){
            return false;
        }else{
            return true;
        }
    }

    public function delResponse($detailId){
        $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        $stm = $this->_pdo->prepare("UPDATE `mock_detail` set `del_flag` = 1 WHERE `id`=?");
        $stm->bindParam(1, $detailId, PDO::PARAM_INT);
        $r = $stm->execute();
        return $r;
    }
}