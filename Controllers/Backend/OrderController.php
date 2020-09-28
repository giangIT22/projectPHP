<?php

class OrderController extends BaseController{
    protected $orderModel;

    public function __construct(){
        parent::__construct();

        $this->loadModel('OrderModel');
        $this->orderModel = new OrderModel;

    }

    public function index(){
        $orders = $this->orderModel->getAll();
        return $this->view('backend.orders.index',[
            'orders' => $orders
        ]);
    }

    public function detail(){
        $orderId = $_GET['id'] ?? null;
        $order   = $this->orderModel->findOrderById(['*'], $orderId);
        $products = $this->orderModel->getProductsByOrderId($orderId);
        return $this->view('backend.orders.detail',[
            'order'     => $order,
            'products'  => $products
        ]);
    }
}