<?php

namespace App\Controllers;

use App\Models\PostModel;

class Posts extends BaseController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function index()
    {
        $data['posts'] = $this->postModel->findAll();
        $data['message'] = session()->getFlashdata('message');
        return view('posts/index', $data);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $this->postModel->save([
            'title' => $this->request->getPost('title'),
            'slug' => $this->request->getPost('slug'),
            'user_id' => $this->request->getPost('user_id'),
            'content' => $this->request->getPost('content'),
            'image' => $this->request->getPost('image'),
            'aktif' => $this->request->getPost('aktif'),
            'status' => $this->request->getPost('status'),
        ]);

        session()->setFlashdata('message', 'Berhasil disimpan');
        return redirect()->to('/posts'); // Pastikan rute valid
    }

    public function edit($id)
    {
        $data['post'] = $this->postModel->find($id);

        if (!$data['post']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('posts/edit', $data);
    }

    public function update($id)
    {
        $this->postModel->update($id, [
            'title' => $this->request->getPost('title'),
            'slug' => $this->request->getPost('slug'),
            'user_id' => $this->request->getPost('user_id'),
            'content' => $this->request->getPost('content'),
            'image' => $this->request->getPost('image'),
            'aktif' => $this->request->getPost('aktif'),
            'status' => $this->request->getPost('status'),
        ]);

        session()->setFlashdata('message', 'Berhasil di-edit');
        return redirect()->to('/posts'); // Pastikan rute valid
    }

    public function delete($id)
    {
        $post = $this->postModel->find($id);

        if (!$post) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->postModel->delete($id);

        session()->setFlashdata('message', 'Berhasil dihapus');
        return redirect()->to('/posts'); // Pastikan rute valid
    }
}
