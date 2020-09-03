<?php
namespace Undkonsorten\Dummymgmt\Domain\Model;


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
 * Project
 */
class Project extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * nonetranslatedfield
     *
     * @var string
     */
    protected $nonetranslatedfield = '';

    /**
     * publications
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\Dummymgmt\Domain\Model\Publication>
     */
    protected $publications = null;

    /**
     * employees
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\Dummymgmt\Domain\Model\Employee>
     */
    protected $employees = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->publications = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->employees = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
    * Returns the nonetranslatedfield
    *
    * @return string $nonetranslatedfield
    */
    public function getNonetranslatedfield()
    {
        return $this->nonetranslatedfield;
    }

    /**
     * Sets the nonetranslatedfield
     *
     * @param string $nonetranslatedfield
     * @return void
     */
    public function setNonetranslatedfield($nonetranslatedfield)
    {
        $this->nonetranslatedfield = $nonetranslatedfield;
    }


    /**
     * Adds a Publication
     *
     * @param \Undkonsorten\Dummymgmt\Domain\Model\Publication $publication
     * @return void
     */
    public function addPublication(\Undkonsorten\Dummymgmt\Domain\Model\Publication $publication)
    {
        $this->publications->attach($publication);
    }

    /**
     * Removes a Publication
     *
     * @param \Undkonsorten\Dummymgmt\Domain\Model\Publication $publicationToRemove The Publication to be removed
     * @return void
     */
    public function removePublication(\Undkonsorten\Dummymgmt\Domain\Model\Publication $publicationToRemove)
    {
        $this->publications->detach($publicationToRemove);
    }

    /**
     * Returns the publications
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\Dummymgmt\Domain\Model\Publication> $publications
     */
    public function getPublications()
    {
        return $this->publications;
    }

    /**
     * Sets the publications
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\Dummymgmt\Domain\Model\Publication> $publications
     * @return void
     */
    public function setPublications(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $publications)
    {
        $this->publications = $publications;
    }

    /**
     * Adds a Employee
     *
     * @param \Undkonsorten\Dummymgmt\Domain\Model\Employee $employee
     * @return void
     */
    public function addEmployee(\Undkonsorten\Dummymgmt\Domain\Model\Employee $employee)
    {
        $this->employees->attach($employee);
    }

    /**
     * Removes a Employee
     *
     * @param \Undkonsorten\Dummymgmt\Domain\Model\Employee $employeeToRemove The Employee to be removed
     * @return void
     */
    public function removeEmployee(\Undkonsorten\Dummymgmt\Domain\Model\Employee $employeeToRemove)
    {
        $this->employees->detach($employeeToRemove);
    }

    /**
     * Returns the employees
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\Dummymgmt\Domain\Model\Employee> $employees
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * Sets the employees
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\Dummymgmt\Domain\Model\Employee> $employees
     * @return void
     */
    public function setEmployees(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $employees)
    {
        $this->employees = $employees;
    }
}
