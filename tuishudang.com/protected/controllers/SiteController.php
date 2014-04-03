<?php
/**
 * 后台主控制器
 * @author xiaoling
 */
class SiteController extends MyController
{
	/**
	 * 主页
	 */
	public function actionIndex()
	{
		// 参数
		$page_num = intval(Yii::app()->request->getParam('page_num'));

		if(!$page_num)
			$page_num = 1;

		// 分页查询
		$page_size = 1;
		$offset = ($page_num - 1) * $page_size;

		$sql = "SELECT * FROM content WHERE 1 ORDER BY order_id DESC, submit_time DESC LIMIT {$offset}, {$page_size}";
		$rows = Yii::app()->db->createCommand($sql)->queryAll();
		foreach($rows as $key => $row)
		{
			$category = Content_category::model()->findByPk($row['category_id']);
			$rows[$key]['category_name'] = $category->name;
		}

		//总条数
 		$count = Content::model()->count();

 		// 总页数
 		$page_total = ceil($count/$page_size);

		// 每页中间页码数组
		$page_arr = array();
		if($count > $page_size)
 		$page_arr = $this->pagebar($page_total, $page_num, 5);

		// 显示
		$this->pageTitle = '首页';
		$data = array();
		$data['rows'] = $rows;
		$data['page_total'] = $page_total;
		$data['page_arr'] = $page_arr;
		$data['count'] = $count;
		$data['page_num'] = $page_num;
		$this->renderPartial('index', $data);
	}

	/**
	 * 详细页
	 */
	public function actionDetial()
	{
		$id = intval(Yii::app()->request->getParam('id'));
		$row = Content::model()->findByPk($id);
		if(!$id || !$row)
		{
			$this->redirect('/');
		}

		$data = array();
		$data['row'] = $row;
		$this->render('detial', $data);
	}
}