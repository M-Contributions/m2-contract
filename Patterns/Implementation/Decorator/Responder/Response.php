<?php
declare(strict_types=1);

/**
 * Decorator Implementation
 * @category    Ticaje
 * @package     Ticaje_Contract
 * @author      Hector Luis Barrientos <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Patterns\Implementation\Decorator\Responder;

use Ticaje\Base\Traits\Getter as GetterTrait;
use Ticaje\Contract\Patterns\Interfaces\Decorator\Responder\ResponseInterface;

/**
 * Class Response
 * @package Ticaje\Contract\Patterns\Implementation\Decorator\Responder
 */
class Response implements ResponseInterface
{
    use GetterTrait;

    protected $success;

    protected $content;

    protected $message;

    /**
     * @inheritDoc
     */
    public function setSuccess(bool $success): ResponseInterface
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setContent($content): ResponseInterface
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setMessage(string $message): ResponseInterface
    {
        $this->message = $message;
        return $this;
    }
}
