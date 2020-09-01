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
 * Publication
 */
class Publication extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * projects
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\Dummymgmt\Domain\Model\Project>
     */
    protected $projects = null;

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
     * Adds a Project
     * 
     * @param \Undkonsorten\Dummymgmt\Domain\Model\Project $project
     * @return void
     */
    public function addProject(\Undkonsorten\Dummymgmt\Domain\Model\Project $project)
    {
        $this->projects->attach($project);
    }

    /**
     * Removes a Project
     * 
     * @param \Undkonsorten\Dummymgmt\Domain\Model\Project $projectToRemove The Project to be removed
     * @return void
     */
    public function removeProject(\Undkonsorten\Dummymgmt\Domain\Model\Project $projectToRemove)
    {
        $this->projects->detach($projectToRemove);
    }

    /**
     * Returns the projects
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\Dummymgmt\Domain\Model\Project> $projects
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Sets the projects
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\Dummymgmt\Domain\Model\Project> $projects
     * @return void
     */
    public function setProjects(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $projects)
    {
        $this->projects = $projects;
    }
}
