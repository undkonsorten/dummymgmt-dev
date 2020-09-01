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
 * ProjectController
 */
class ProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * projectRepository
     * 
     * @var \Undkonsorten\Dummymgmt\Domain\Repository\ProjectRepository
     */
    protected $projectRepository = null;

    /**
     * @param \Undkonsorten\Dummymgmt\Domain\Repository\ProjectRepository $projectRepository
     */
    public function injectProjectRepository(\Undkonsorten\Dummymgmt\Domain\Repository\ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $projects = $this->projectRepository->findAll();
        $this->view->assign('projects', $projects);
    }

    /**
     * action show
     * 
     * @param \Undkonsorten\Dummymgmt\Domain\Model\Project $project
     * @return void
     */
    public function showAction(\Undkonsorten\Dummymgmt\Domain\Model\Project $project)
    {
        $this->view->assign('project', $project);
    }
}
