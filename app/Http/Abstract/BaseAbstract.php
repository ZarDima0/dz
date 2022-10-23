<?php
namespace App\Http\Abstract;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

abstract class BaseAbstract extends controller
{
    /**
     * @param string $table
     * @return \Illuminate\Support\Collection
     */
    public function getList(string $table)
    {
        return DB::table($table)->get();
    }

    /**
     * @param string $table
     * @param string $column
     * @param string $item
     * @return \Illuminate\Support\Collection
     */
    public function showItem(
        string $table,
        string $column,
        string $item
    )
    {
        return DB::table($table)->where($column,'=',$item)->get();
    }

    /**
     * @param string $table
     * @param string $column
     * @param string $item
     * @return int
     */
    public function delete(
        string $table,
        string $column,
        string $item
    ):int
    {
        return DB::table($table)->where($column,'=',$item)->delete();
    }
}
