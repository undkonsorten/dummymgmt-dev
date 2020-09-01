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
 * PublicationController
 */
class PublicationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * publicationRepository
     * 
     * @var \Undkonsorten\Dummymgmt\Domain\Repository\PublicationRepository
     */
    protected $publicationRepository = null;

    /**
     * @param \Undkonsorten\Dummymgmt\Domain\Repository\PublicationRepository $publicationRepository
     */
    public function injectPublicationRepository(\Undkonsorten\Dummymgmt\Domain\Repository\PublicationRepository $publicationRepository)
    {
        $this->publicationRepository = $publicationRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $publications = $this->publicationRepository->findAll();
        $this->view->assign('publications', $publications);
    }

    /**
     * action show
     * 
     * @param \Undkonsorten\Dummymgmt\Domain\Model\Publication $publication
     * @return void
     */
    public function showAction(\Undkonsorten\Dummymgmt\Domain\Model\Publication $publication)
    {
        $this->view->assign('publication', $publication);
    }
}
