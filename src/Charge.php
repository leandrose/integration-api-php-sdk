<?php

namespace TamoJuno;

class Charge extends Resource
{

    public function endpoint(): string
    {
        return 'charges';
    }

    public function createCharge(array $form_params = [])
    {
        return $this->create($form_params);
    }

    public function cancelCharge($id = null)
    {
        return $this->resource_requester->request('PUT', $this->url($id, 'cancelation'));
    }
}
