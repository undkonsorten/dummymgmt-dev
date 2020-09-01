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
 * Employee
 */
class Employee extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * projects
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<>
     */
    protected $projects = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

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
        $this->projects = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a
     * 
     * @param  $project
     * @return void
     */
    public function addProject($project)
    {
        $this->projects->attach($project);
    }

    /**
     * Removes a
     * 
     * @param $projectToRemove The  to be removed
     * @return void
     */
    public function removeProject($projectToRemove)
    {
        $this->projects->detach($projectToRemove);
    }

    /**
     * Returns the projects
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $projects
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Sets the projects
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $projects
     * @return void
     */
    public function setProjects(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $projects)
    {
        $this->projects = $projects;
    }
}
