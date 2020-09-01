<?php
namespace Undkonsorten\Dummymgmt\Controller;


/***
 *
 * This file is part of the "dummymgmt" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 
 *
 ***/
/**
 * EmployeeController
 */
class EmployeeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * employeeRepository
     * 
     * @var \Undkonsorten\Dummymgmt\Domain\Repository\EmployeeRepository
     */
    protected $employeeRepository = null;

    /**
     * @param \Undkonsorten\Dummymgmt\Domain\Repository\EmployeeRepository $employeeRepository
     */
    public function injectEmployeeRepository(\Undkonsorten\Dummymgmt\Domain\Repository\EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $employees = $this->employeeRepository->findAll();
        $this->view->assign('employees', $employees);
    }

    /**
     * action show
     * 
     * @param \Undkonsorten\Dummymgmt\Domain\Model\Employee $employee
     * @return void
     */
    public function showAction(\Undkonsorten\Dummymgmt\Domain\Model\Employee $employee)
    {
        $this->view->assign('employee', $employee);
    }
}
