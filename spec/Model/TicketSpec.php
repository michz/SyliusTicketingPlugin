<?php

namespace spec\mztx\SyliusTicketingPlugin\Model;

use mztx\SyliusTicketingPlugin\Model\Ticket;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

class TicketSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf(Ticket::class);
    }

    public function it_is_code_aware()
    {
        $this->shouldImplement(CodeAwareInterface::class);
    }

    public function it_is_a_resource()
    {
        $this->shouldImplement(ResourceInterface::class);
    }

    public function it_can_get_and_set_id()
    {
        $this->setId(123);
        $this
            ->getId()
            ->shouldReturn(123);
    }

    public function it_can_get_and_set_code()
    {
        $this->setCode('code');
        $this
            ->getCode()
            ->shouldReturn('code');
    }

    public function it_can_get_and_set_article_code()
    {
        $this->setArticleCode('articlecode');
        $this
            ->getArticleCode()
            ->shouldReturn('articlecode');
    }

    public function it_can_get_and_set_owner()
    {
        $this->setOwner('owner');
        $this
            ->getOwner()
            ->shouldReturn('owner');
    }

    public function it_can_set_and_get_created()
    {
        $date = new \DateTime('2018-12-30 03:05:08');
        $this->setCreated($date);
        $this
            ->getCreated()
            ->shouldReturn($date);
    }

    public function it_can_set_and_get_used()
    {
        $date = new \DateTime('2018-12-31 03:05:08');
        $this->setUsed($date);
        $this
            ->getUsed()
            ->shouldReturn($date);
    }

    public function it_can_set_and_get_state()
    {
        $this->setState('state');
        $this
            ->getState()
            ->shouldReturn('state');
    }
}
