<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loans = json_decode(file_get_contents("database/jsons/loans.json"),true);

        foreach($loans as $loanA) {
            $loan = new Loan();
            $loan->loan_date = $loanA['loan_date'];
            $loan->return_date = $loanA['return_date'];
            $loan->status = $loanA['status'];
            $loan->movie_id = $loanA['movie_id'];
            $loan->user_id = $loanA['user_id'];
            $loan->save();
        }
    }
}
