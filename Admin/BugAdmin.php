<?php
namespace Zertz\BugBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class BugAdmin extends Admin
{
    // Sort list
    protected $datagridValues = array(
        '_page'       => 1,
        '_sort_order' => 'ASC',
        '_sort_by'    => 'fixed'
    );
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('type')
            ->add('problem')
            ->add('description', 'textarea', array(
                'attr' => array(
                    'rows' => 8,
                )
            ))
            ->add('fixed', 'checkbox', array(
                'required' => false,
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('problem')
            ->add('description')
            ->add('fixed')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('type')
            ->addIdentifier('problem')
            ->add('fixed')
        ;
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('problem')
                ->assertMaxLength(array('limit' => 255))
            ->end()
        ;
    }
}
