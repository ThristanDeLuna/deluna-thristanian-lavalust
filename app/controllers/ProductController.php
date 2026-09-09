<?php
class ProductController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->call->model('ProductModel');
    }

    public function index() {
        $data['products'] = $this->ProductModel->get_all_products();
        $this->call->view('products/index', $data);
    }

    public function create() {
        if ($this->io->method() == 'post') {
            $this->ProductModel->create_product([
                'product_name' => filter_io('string', $this->io->post('product_name')),
                'description'  => filter_io('string', $this->io->post('description')),
                'price'        => $this->io->post('price'),
                'quantity'     => $this->io->post('quantity'),
            ]);
            redirect('products');
        } else {
            $this->call->view('products/create');
        }
    }

    public function edit($id) {
        if ($this->io->method() == 'post') {
            $this->ProductModel->update_product($id, [
                'product_name' => filter_io('string', $this->io->post('product_name')),
                'description'  => filter_io('string', $this->io->post('description')),
                'price'        => $this->io->post('price'),
                'quantity'     => $this->io->post('quantity'),
            ]);
            redirect('products');
        } else {
            $data['product'] = $this->ProductModel->get_product($id);
            $this->call->view('products/edit', $data);
        }
    }

    public function delete($id) {
        $this->ProductModel->delete_product($id);
        redirect('products');
    }
}