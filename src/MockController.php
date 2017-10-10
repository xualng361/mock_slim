<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class MockController
{
    protected $ci;
    private $out;
    private $jsonOut = array('success'=>false, 'msg'=>'', 'data'=>array());

    public function __construct($ci)
    {
        $this->ci = $ci;
    }

    public function indexAction($request, $response, $args)
    {
        $router = $this->ci->get('router');
        //$model = new MockModel($this->ci['db']);
        if (!isset($args['page'])){
            $args['page'] = 0;
        }
        $queryParams  = $request->getQueryParams();
        $queryUrl = $queryParams['url'] ? $queryParams['url'] : '';
        //$this->out = $model->getMockList($args['page'],$queryUrl);
        $this->out['types'] = array(1=>'json', 2=>'xml', 3=>'表单');
        $this->out['this_route'] =  $router->pathFor('MockController:indexAction');
        $this->out['add_route'] =  $router->pathFor('MockController:addAction');
        $this->out['url'] =  $queryUrl;
        return $this->ci['response']
            ->withHeader('Content-Type', 'text/html')
            ->write($this->ci->get('twig')->render('mock/index.html',$this->out));
    }
    public function deleteAction($request, $response, $args){
        $postData = $request->getParsedBody();
        $id= $postData['mockId'];
        if((int)$id){
            $model = new MockModel($this->ci['db']);
            $data = $model->delete($id);
        }
        if($data){
            $this->jsonOut['success'] = true;
            $this->jsonOut['data'] = $data;
        }
        return $this->ci['response']
            ->withJson($this->jsonOut);
    }

    public function urlsearchAction($request){
        $postData = $request->getParsedBody();
        $q= $postData['q'];
        $model = new MockModel($this->ci['db']);
        $data = $model->delete($q);
        $this->jsonOut['success'] = true;
        $this->jsonOut['data'] = $data;
        return $this->ci['response']
            ->withJson($this->jsonOut);
    }

    public function addAction($request, $response, $args){
        $this->out= array();
        if ($request->isPost()){
            return $this->addMockAction($request, $response, $args);
        }
        if(isset($args['id'])){
            $model = new MockModel($this->ci['db']);
            $this->out['data'] = $model->getMockDetail($args['id']);
        }
        return $this->ci['response']
            ->withHeader('Content-Type', 'text/html')
            ->write($this->ci->get('twig')->render('mock/add.html', $this->out));
    }

    public function saveMockAction($request, $response, $args)
    {
        $postData = $request->getParsedBody();
        $param['url'] = $postData['url'];
        $param['type'] = $postData['type'];
        $param['common'] = $postData['common'];
        $id = isset($args['id'])?intval($args['id']):null;
        $model = new MockModel($this->ci['db']);
        $data = $model->saveMock($id, $param);
        if($data){
            $this->jsonOut['success'] = true;
            $this->jsonOut['data'] = $data;
        }
        return $this->ci['response']
            ->withJson($this->jsonOut);
    }

    public function mappingSaveAction($request, $response, $args){
        $postData = $request->getParsedBody();
        $param['ip'] = $postData['ip'];
        $param['mock_id'] = $postData['mockId'];
        $model = new MockModel($this->ci['db']);
        $data = $model->addMockMapping($param);
        if($data){
            $this->jsonOut['success'] = true;
            $this->jsonOut['data'] = $data;
        }
        return $this->ci['response']
            ->withJson($this->jsonOut);
    }

    public function findIpAction($request, $response, $args){
        $queryParams  = $request->getQueryParams();
        $mockId = $queryParams['mockId'];
        $model = new MockModel($this->ci['db']);
        $data = $model->findmMappingIp($mockId);
        if($data){
            $this->jsonOut['success'] = true;
            $this->jsonOut['data'] = $data;
        }
        return $this->ci['response']
            ->withJson($this->jsonOut);
    }

    public function findVarAction($request, $response, $args){
        $postData = $request->getParsedBody();
        $detailId = $postData['detailId'];
        $mockId = $postData['mockId'];
        $model = new MockModel($this->ci['db']);
        $data = $model->findMockVar($detailId,$mockId);
        $this->jsonOut['success'] = true;
        $this->jsonOut['data'] = $data;
        return $this->ci['response']
            ->withJson($this->jsonOut);
    }

    public function varSaveAction($request, $response, $args){
        $postData = $request->getParsedBody();
        $id = $postData['id'] ? (int)$postData['id'] : null;
        $param['detail_id'] = $postData['detailId'];
        $param['mock_id'] = $postData['mockId'];
        $param['keyword'] = $postData['key'];
        $param['val'] = $postData['value'];
        $param['comment'] = $postData['comment'];
        $model = new MockModel($this->ci['db']);
        $data = $model->varSave($id, $param);
        if($data){
            $this->jsonOut['success'] = true;
            $this->jsonOut['data'] = $data;
        }
        return $this->ci['response']->withJson($this->jsonOut);
    }

    public function findResponseAction($request, $response, $args){
        $queryParams  = $request->getQueryParams();
        $id = $queryParams['mockId'];
        $model = new MockModel($this->ci['db']);
        $data = $model->findResponseDetail($id);
        $response =$ruleResponse = [];
        foreach ($data as $k=>$v){
            if($v['rule_flag'] == 0 ){
                $response[] = array(
                    'id' => $v['id'],
                    'mockId' => $v['mock_id'],
                    'response' => $v['response'],
                    'ruleFlag' => $v['rule_flag'],
                    'delFlag' => $v['del_flag'],
                    'tips' => $v['tips'],
                    'timeout' => null,
                    'codeStatus' => '',
                );
            }else{
                $ruleData = $model->getRuleResponse($v['id']);
                if($ruleData){
                    foreach ($ruleData as $val){
                        $ruleResponse[$v['id']][] = array(
                            'id' => $val['id'],
                            'response' => $val['response'],
                            'value' => $val['value'],
                            'tips' => $val['tips'],
                            'xpath' => $val['xpath'],
                            'detailId' => $v['id'],
                            'delFlag' => $v['del_flag'],
                            'timeout' => null,
                            'codeStatus' => '',
                        );
                    }
                }else{
                    $ruleResponse[$v['id']][] = array(
                        'detailId' => $v['id'],
                        'delFlag' => $v['del_flag'],
                        'timeout' => null,
                        'codeStatus' => '',
                        'id' => '',
                        'response' => '',
                        'value' => '',
                        'tips' => '',
                        'xpath' => '',
                    );
                }
            }
        }
        $this->jsonOut['success'] = true;
        $this->jsonOut['data']['response'] = $response;
        $this->jsonOut['data']['ruleResponse'] = $ruleResponse;
        return $this->ci['response']->withJson($this->jsonOut);
    }

    public function delResponseAction($request, $response, $args){
        $postData = $request->getParsedBody();
        $model = new MockModel($this->ci['db']);
        $detailId = $postData['detailId'];
        $mappingId = $postData['mappingId'];
        $data = $model->delResponse($detailId);
        if($data){
            $this->jsonOut['success'] = true;
        }
        $this->jsonOut['data'] = $data;
        return $this->ci['response']->withJson($this->jsonOut);
    }

    public function responseSaveAction($request, $response, $args){
        $postData = $request->getParsedBody();
        $model = new MockModel($this->ci['db']);
        $detailId = $postData['detailId'] ? $postData['detailId']: null;
        //$param['timeout'] = $postData['timeout'];
        //$param['codeStatus'] = $postData['codeStatus'];
        if($postData['type'] == 0){
            $param['tips'] = $postData['comment'];
            $param['mock_id'] = $postData['mockId'];
            $param['response'] = $postData['response'];
            $param['rule_flag'] = $postData['type'];
            $data = $model->responseSave($detailId, $param);
        }else{
            $param['mock_id'] = $postData['mockId'];
            $param['rule_flag'] = 1;
            $ruleId = (int)$postData['ruleId'] ? (int)$postData['ruleId'] : 0;
            $ruleParam['xpath'] = $postData['xpath'];
            $ruleParam['value'] = $postData['value'];
            $ruleParam['response'] = $postData['response'];
            $ruleParam['tips'] = $postData['comment'];
            $data = $model->ruleResponseSave($detailId, $param,$ruleParam,$ruleId);
        }

        $this->jsonOut['success'] = true;
        if(is_null($detailId)){
            $this->jsonOut['data'] = array('detailId'=> $data);
        }else{
            $this->jsonOut['data'] = array('detailId'=> $detailId);
        }

        return $this->ci['response']->withJson($this->jsonOut);
    }

    public function find2Action($request, $response, $args){
        $postData = $request->getParsedBody();
        $mockId= $postData['mockId'];
        $eip= $postData['eip'];
        $model = new MockModel($this->ci['db']);
        $data = $model->findMapping($mockId, $eip);
        $this->jsonOut['success'] = true;
        $this->jsonOut['data'] = $data;
        return $this->ci['response']
            ->withJson($this->jsonOut);
    }

    public function turnResponseAction($request, $response, $args){
        $postData = $request->getParsedBody();
        $param['detailId'] = $postData['detailId'];
        $flag = $postData['flag'];
        $param['mappingId'] = $postData['mappingId'];
        $param['mockId'] = $postData['mockId'];
        $model = new MockModel($this->ci['db']);
        $data = $model->turnResponse($param,$flag);
        if($data){
            $this->jsonOut['success'] = true;
            if($flag == 1){
                $this->jsonOut['msg'] = "响应绑定成功";
            }else{
                $this->jsonOut['msg'] = "响应解绑成功";
            }
        }
        return $this->ci['response']
            ->withJson($this->jsonOut);
    }
}
