<?php

class PostsController extends AppController
{
	public $uses = array('Post','User','Category');

	//記事一覧ページ
	public function index()
	{
		//投稿記事をすべて取り出す
		$posts = $this->Post->find('all');
		$this->set('posts',$posts);
	}

	//記事詳細ページ
	public function detail()
	{
		$post_id = $this->request->pass[0];
		$post = $this->Post->findById($post_id);
		$this->set('post', $post);
	}

	//記事追加ページ
	public function add()
	{
		$users = $this->User->find('list');
		$categories = $this->Category->find('list');
		$this->set('users',$users);
		$this->set('categories',$categories);

		if ($this->request->is('post')) {
			$post = $this->request->data;
			$this->Post->save($post);
			$this->Session->setFlash('Success!');
			$this->redirect(array('action'=>'index'));
		}
	}

	//記事削除ページ
	public function delete()
	{
		$post_id = $this->request->pass[0];
		
		if ($this->request->is('post')) {
			$this->Post->delete($post_id);
			$this->Session->setFlash('Deleted successfully.');
			$this->redirect(array('action' => 'index'));
		} else {//不正なアクセス
			$this->redirect('/');
		}
	}

	//記事編集ページ
	public function edit()
	{
		$post_id = $this->request->pass[0];
		if ($this->request->is('get')){
			$users = $this->User->find('list');
			$categories = $this->Category->find('list');
			$this->set('users',$users);
			$this->set('categories',$categories);
			$post = $this->Post->findById($post_id);
			//var_dump($post);
			//var_dump($this->request->data);
			$this->request->data['Post'] = $post['Post'];
		} else  {
			$post = $this->request->data;
			$post['Post']['id'] = $post_id;
			$this->Post->save($post);
			$this->Session->setFlash('Updated successfully.');
			$this->redirect(array('action' => 'index'));
		} 
	}
}

