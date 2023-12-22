<?php

declare(strict_types=1);

namespace Swis\PHPMD\Renderer;

use PHPMD\AbstractRenderer;
use PHPMD\AbstractWriter;
use PHPMD\Renderer\Option\Color;
use PHPMD\Renderer\Option\Verbose;
use PHPMD\Renderer\TextRenderer;
use PHPMD\Report;
use Swis\Bitbucket\Reports\BitbucketApiClient;
use Swis\Bitbucket\Reports\BitbucketConfig;

class BitbucketRenderer extends AbstractRenderer implements Verbose, Color
{
    private const REPORT_TITLE = 'PHPMD';

    private TextRenderer $textRenderer;

    private BitbucketApiClient $apiClient;

    public function __construct()
    {
        $this->textRenderer = new TextRenderer();
        $this->apiClient = new BitbucketApiClient();
    }

    public function renderReport(Report $report)
    {
        $this->textRenderer->renderReport($report);

        $reportUuid = $this->apiClient->createReport(self::REPORT_TITLE, $report->getRuleViolations()->count() + $report->getErrors()->count());

        /** @var \PHPMD\RuleViolation $violation */
        foreach ($report->getRuleViolations() as $violation) {
            $this->apiClient->addAnnotation(
                $reportUuid,
                $violation->getDescription(),
                $violation->getFileName(),
                $violation->getBeginLine()
            );
        }

        /** @var \PHPMD\ProcessingError $error */
        foreach ($report->getErrors() as $error) {
            $this->apiClient->addAnnotation(
                $reportUuid,
                str_replace(BitbucketConfig::cloneDir().DIRECTORY_SEPARATOR, '', $error->getMessage()),
                $error->getFile(),
                null
            );
        }
    }

    public function setWriter(AbstractWriter $writer)
    {
        $this->textRenderer->setWriter($writer);
    }

    public function setVerbosityLevel($level)
    {
        $this->textRenderer->setVerbosityLevel($level);
    }

    public function setColored($colored)
    {
        $this->textRenderer->setColored($colored);
    }
}
