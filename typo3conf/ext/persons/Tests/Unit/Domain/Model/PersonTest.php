<?php
namespace In2code\Persons\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alex Kellner <alexander.kellner@in2code.de>
 */
class PersonTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \In2code\Persons\Domain\Model\Person
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \In2code\Persons\Domain\Model\Person();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );

    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );

    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getNewsletterReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getNewsletter()
        );

    }

    /**
     * @test
     */
    public function setNewsletterForBoolSetsNewsletter()
    {
        $this->subject->setNewsletter(true);

        self::assertAttributeEquals(
            true,
            'newsletter',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBirthdateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getBirthdate()
        );

    }

    /**
     * @test
     */
    public function setBirthdateForDateTimeSetsBirthdate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBirthdate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'birthdate',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );

    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );

    }
}