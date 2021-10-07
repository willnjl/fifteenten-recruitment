<?php 


class FifteentenRecruitment
{



    public function __construct()
    {
        add_action( 'init', [$this, 'register_cpts'] );
    }


    public function register_cpts()
    {
        // cpt
        fifteenten_register_cpt_jobs();

        // taxes
        fifteenten_register_tax_sector();
        fifteenten_register_tax_contract_types();
        fifteenten_register_tax_job_locations();

    }

    
}