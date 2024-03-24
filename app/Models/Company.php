<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Log;

class Company extends Model
{
    use HasFactory;

    // Get all record
    public function GetAllRecord()
    {
        $query = DB::table('public.companies')
            ->select('*')
            ->get();

        return $query;
    }

    public function createUUID()
    {
        $query = strtoupper(substr(Str::uuid()->toString(), 0, 20));
        return $query;
    }

    public function createAcc($data)
    {
        $companyCode = strtoupper(substr($data, 0, 4));
        $creationDate = Carbon::now()->format('ymd');
        $accountNo = $companyCode . $creationDate;

        return $accountNo;
    }

    // Create a new record

    public function saveRecord($data)
    {
        try {
            DB::table('public.companies')->insert([
                'UUID' => $data->UUID,
                'account_no' => $data->account_no,
                'company_name' => $data->company_name,
                'company_email' => $data->company_email,
                'company_phone_number' => $data->company_phone_number,
                'company_address' => $data->company_address,
                'company_type' => $data->company_type,
            ]);
            return;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
