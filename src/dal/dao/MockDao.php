<?php
class MockDao extends Dao{
    private $_sqlGetArticlesCnt = 'SELECT COUNT(*) AS \'count\' FROM `articles`';

    public function getMockList(){
        $stm = $this->_pdo->prepare($this->_sqlGetArticlesCnt);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_KEY_PAIR);
    }

}