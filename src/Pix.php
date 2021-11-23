<?php

namespace TamoJuno;

class Pix extends Resource
{

    public function endpoint(): string
    {
        return 'pix';
    }

    public function createRandomKey()
    {
        return $this->resource_requester->request('POST', $this->url(null, 'keys'), [
            'json' => [
                'type' => 'RANDOM_KEY',
                'key' => '',
            ],
            'headers' => [
                'X-Idempotency-Key' => uuid_create(),
            ],
        ]);
    }

    public function createStaticQRCode($id = null, $action = null, array $form_params = [])
    {
        return $this->post($id, 'qrcodes/static', $form_params);
    }


}
