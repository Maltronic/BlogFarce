<?php

namespace BlogFarce\BlogBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateBlogCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('blog:create')
                ->setDescription('Create a new blog post');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('here');
    }
}
