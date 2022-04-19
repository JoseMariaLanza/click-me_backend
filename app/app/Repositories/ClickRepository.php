<?php

namespace App\Repositories;

use App\Click;
use Illuminate\Support\Facades\DB;

class ClickRepository implements IRepository {
    protected $model;

    public function __construct(Click $click)
    {
        $this->model = $click;
    }

    public function all()
    {
        $click_data = $this->model->paginate(5);
        $initial_value = true ? $click_data->items()[0]->times_clicked : 0;
        return [
            'page' => $click_data,
            'initial_value' => $initial_value
        ];
        // return response([
        //     'page' => $click_data
        // ], 200);
    }
}
