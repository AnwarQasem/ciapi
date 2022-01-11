<?php
namespace Anwarqasem\CiApi;

use CodeIgniter\API\ResponseTrait;
use App\Controllers;

class CiApi extends Controllers\BaseController
{
    use ResponseTrait;

    public function test () {
        $this->respond(["merge"]);
    }

}