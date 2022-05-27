<?php
namespace EscolaLms\FakturowniaIntegration\Services\Contracts;

use Abb\Fakturownia\ResponseInterface;
use EscolaLms\Cart\Models\Order;

interface FakturowniaIntegrationServiceContract
{
    public function import(Order $order, bool $returnFullResponse = false);
    public function getInvoicePdf(Order $order): ResponseInterface;
}
