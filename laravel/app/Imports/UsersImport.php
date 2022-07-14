<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class UsersImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {

        return [
            'delimiter' => ';',
            'enclosure' => ' ',
            'line_ending' => PHP_EOL,
            'use_bom' => true,
            'include_separator_line' => false,
            'excel_compatibility' => false,
        ];
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {

        $user= new User([
            'Код'=>$row[0],
            'Наименование'=>$row[1],
            'Уровень1'=>$row[2],
            'Уровень2'=>$row[3],
            'Уровень3'=>$row[4],
            'Цена'=>$row[5],
            'ЦенаСП'=> $row[6],
            'Количество'=>$row[7],
            'ПоляСвойств'=>$row[8],
          'СовместныеПокупки'=>$row[9],
            'ЕдиницаИзмерения'=>$row[10],
            'Картинка'=>$row[11],
            'ВыводитьНаГлавной'=>$row[12],
            'Описание'=>$row[13],

        ]);


        return $user;
    }
}
