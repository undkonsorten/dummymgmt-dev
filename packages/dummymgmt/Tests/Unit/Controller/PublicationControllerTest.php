<?php
namespace Undkonsorten\Dummymgmt\Tests\Unit\Controller;

/**
 * Test case.
 */
class PublicationControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Undkonsorten\Dummymgmt\Controller\PublicationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Undkonsorten\Dummymgmt\Controller\PublicationController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllPublicationsFromRepositoryAndAssignsThemToView()
    {

        $allPublications = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $publicationRepository = $this->getMockBuilder(\Undkonsorten\Dummymgmt\Domain\Repository\PublicationRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $publicationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPublications));
        $this->inject($this->subject, 'publicationRepository', $publicationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('publications', $allPublications);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPublicationToView()
    {
        $publication = new \Undkonsorten\Dummymgmt\Domain\Model\Publication();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('publication', $publication);

        $this->subject->showAction($publication);
    }
}
