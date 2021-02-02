<?php

    namespace App\Exports;

    use App\Models\Control\Client;
    use Maatwebsite\Excel\Concerns\FromCollection;

    class ClientExport implements FromCollection
    {
        /**
         * @return \Illuminate\Support\Collection
         */
        public function collection()
        {
            return Client::all();
        }
    }
