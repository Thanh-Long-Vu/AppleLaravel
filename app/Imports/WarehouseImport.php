<?php

namespace App\Imports;

use App\Models\Warehouse;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WarehouseImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Warehouse([
            'name'          => $row['name'],
            'quantity'      => $row['quantity'],
            'imei'          => $row['imei'],
            'color'         => $row['color'],
            'memory'        => $row['memory'],
            'price'         => $row['price'],
            'warranty'      => $row['warranty'],
            'active'        => $row['active'],
            'deleted_at'    => $row['deleted_at'],
            'quantity_sell' => $row['quantity_sell'],
        ]);
    }
}
