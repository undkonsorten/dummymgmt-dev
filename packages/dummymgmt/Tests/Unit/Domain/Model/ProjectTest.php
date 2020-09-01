<?php
namespace Undkonsorten\Dummymgmt\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ProjectTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Undkonsorten\Dummymgmt\Domain\Model\Project
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Undkonsorten\Dummymgmt\Domain\Model\Project();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPublicationsReturnsInitialValueForPublication()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPublications()
        );
    }

    /**
     * @test
     */
    public function setPublicationsForObjectStorageContainingPublicationSetsPublications()
    {
        $publication = new \Undkonsorten\Dummymgmt\Domain\Model\Publication();
        $objectStorageHoldingExactlyOnePublications = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePublications->attach($publication);
        $this->subject->setPublications($objectStorageHoldingExactlyOnePublications);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePublications,
            'publications',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPublicationToObjectStorageHoldingPublications()
    {
        $publication = new \Undkonsorten\Dummymgmt\Domain\Model\Publication();
        $publicationsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $publicationsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($publication));
        $this->inject($this->subject, 'publications', $publicationsObjectStorageMock);

        $this->subject->addPublication($publication);
    }

    /**
     * @test
     */
    public function removePublicationFromObjectStorageHoldingPublications()
    {
        $publication = new \Undkonsorten\Dummymgmt\Domain\Model\Publication();
        $publicationsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $publicationsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($publication));
        $this->inject($this->subject, 'publications', $publicationsObjectStorageMock);

        $this->subject->removePublication($publication);
    }

    /**
     * @test
     */
    public function getEmployeesReturnsInitialValueForEmployee()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEmployees()
        );
    }

    /**
     * @test
     */
    public function setEmployeesForObjectStorageContainingEmployeeSetsEmployees()
    {
        $employee = new \Undkonsorten\Dummymgmt\Domain\Model\Employee();
        $objectStorageHoldingExactlyOneEmployees = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEmployees->attach($employee);
        $this->subject->setEmployees($objectStorageHoldingExactlyOneEmployees);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEmployees,
            'employees',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addEmployeeToObjectStorageHoldingEmployees()
    {
        $employee = new \Undkonsorten\Dummymgmt\Domain\Model\Employee();
        $employeesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $employeesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($employee));
        $this->inject($this->subject, 'employees', $employeesObjectStorageMock);

        $this->subject->addEmployee($employee);
    }

    /**
     * @test
     */
    public function removeEmployeeFromObjectStorageHoldingEmployees()
    {
        $employee = new \Undkonsorten\Dummymgmt\Domain\Model\Employee();
        $employeesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $employeesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($employee));
        $this->inject($this->subject, 'employees', $employeesObjectStorageMock);

        $this->subject->removeEmployee($employee);
    }
}
