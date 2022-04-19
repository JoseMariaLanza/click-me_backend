<?php

namespace App\Repositories;

use App\Click;
use Carbon\Carbon;
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
    }

    public function store($data)
    {
        DB::beginTransaction();
        try {
            $data = $this->model->create([
                'times_clicked' => $data->times_clicked
            ]);
            DB::commit();
            return [
                'success'   => true,
                'data'      => $this->all(),
                'message'   => 'Created'
            ];
        } catch (\Exception $ex) {
            DB::rollBack();
            return [
                'success'   => false,
                'message'   => 'An error ocurred',
                'errorInfo' => $ex->errorInfo
            ];
        }
    }

    public function dateValidation()
    {
        $last_date = Click::max('created_at');
        $now = Carbon::now();
        // Try comment previous code and uncomment below for test the requirement manually
        // $now = Carbon::create('2022-04-21 00:00:00'); (example)
        $last_date = Carbon::create($last_date)->format('Y-m-d');
        $last_date_limit = Carbon::create($last_date . '23:59:59');

        if ($now < $last_date_limit) {
            return true;
        }
        return false;
    }
}
