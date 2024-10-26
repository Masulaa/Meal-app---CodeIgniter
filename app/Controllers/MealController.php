<?php
namespace App\Controllers;

use App\Models\MealModel;

class MealController extends BaseController
{
    public function index()
    {
        $mealModel = new MealModel();
        $data['meals'] = $mealModel->findAll();
        return view('meals/index', $data);
    }

    public function order($id)
    {
        $mealModel = new MealModel();
        $meal = $mealModel->find($id);
        return view('meals/order', ['meal' => $meal]);
    }
}
