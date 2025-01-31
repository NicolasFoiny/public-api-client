<?php

namespace ArrowSphere\PublicApiClient\Campaigns\Entities\LandingPage;

use ArrowSphere\PublicApiClient\AbstractEntity;
use ArrowSphere\PublicApiClient\Exception\EntityValidationException;

class LandingPageBody extends AbstractEntity
{
    public const COLUMN_BACKGROUNDIMAGEUUID = 'backgroundImageUuid';
    public const COLUMN_TYPE = 'type';
    public const COLUMN_TITLE = 'title';
    public const COLUMN_DESCRIPTION = 'description';
    public const COLUMN_VIDEOURL = 'videoUrl';
    public const COLUMN_BUTTONTEXT = 'buttonText';
    public const COLUMN_CONTACTEMAIL = 'contactEmail';

    public const DEFAULT_VALUE_BACKGROUNDIMAGEUUID = '';
    public const DEFAULT_VALUE_TYPE = '';
    public const DEFAULT_VALUE_TITLE = '';
    public const DEFAULT_VALUE_DESCRIPTION = '';
    public const DEFAULT_VALUE_VIDEOURL = null;
    public const DEFAULT_VALUE_BUTTONTEXT = null;
    public const DEFAULT_VALUE_CONTACTEMAIL = null;

    /**
     * @var string
     */
    private $backgroundImageUuid;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string|null
     */
    private $videoUrl;

    /**
     * @var string|null
     */
    private $buttonText;

    /**
     * @var string|null
     */
    private $contactEmail;

    /**
     * Statement constructor.
     *
     * @param array $data
     *
     * @throws EntityValidationException
     * @throws \ReflectionException
     */
    public function __construct(array $data)
    {
        parent::__construct($data);

        $this->backgroundImageUuid = $data[self::COLUMN_BACKGROUNDIMAGEUUID] ?? self::DEFAULT_VALUE_BACKGROUNDIMAGEUUID;
        $this->type = $data[self::COLUMN_TYPE] ?? self::DEFAULT_VALUE_TYPE;
        $this->title = $data[self::COLUMN_TITLE] ?? self::DEFAULT_VALUE_TITLE;
        $this->description = $data[self::COLUMN_DESCRIPTION] ?? self::DEFAULT_VALUE_DESCRIPTION;
        $this->videoUrl = $data[self::COLUMN_VIDEOURL] ?? self::DEFAULT_VALUE_VIDEOURL;
        $this->buttonText = $data[self::COLUMN_BUTTONTEXT] ?? self::DEFAULT_VALUE_BUTTONTEXT;
        $this->contactEmail = $data[self::COLUMN_CONTACTEMAIL] ?? self::DEFAULT_VALUE_CONTACTEMAIL;
    }

    /**
     * @return string
     */
    public function getBackgroundImageUuid(): string
    {
        return $this->backgroundImageUuid;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * @return string|null
     */
    public function getButtonText(): ?string
    {
        return $this->buttonText;
    }

    /**
     * @return string|null
     */
    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            self::COLUMN_BACKGROUNDIMAGEUUID => $this->getBackgroundImageUuid(),
            self::COLUMN_TYPE                => $this->getType(),
            self::COLUMN_TITLE               => $this->getTitle(),
            self::COLUMN_DESCRIPTION         => $this->getDescription(),
            self::COLUMN_VIDEOURL            => $this->getVideoUrl(),
            self::COLUMN_BUTTONTEXT          => $this->getButtonText(),
            self::COLUMN_CONTACTEMAIL        => $this->getContactEmail(),
        ];
    }
}
