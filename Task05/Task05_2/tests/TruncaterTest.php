<?php

namespace Tests;

use App\Truncater;
use PHPUnit\Framework\TestCase;

class TruncaterTest extends TestCase
{
    public function testTruncate()
    {
        $defaultTruncater = new Truncater();
        $this->assertSame("Бурлакова Татьяна Сергеевна", $defaultTruncater->truncate("Бурлакова Татьяна Сергеевна"));
        $this->assertSame("Бурлакова ...", $defaultTruncater->truncate("Бурлакова Татьяна Сергеевна", ['length' => 10]));
        $this->assertSame("Бурлакова Тат...", $defaultTruncater->truncate("Бурлакова Татьяна Сергеевна",['length' => -13]));
        $this->assertSame("Бурлакова *", $defaultTruncater->truncate("Бурлакова Татьяна Сергеевна",['length' => 10, 'separator' => '*']));
        $this->assertSame("Бурлакова Татьяна Сергеевна", $defaultTruncater->truncate("Бурлакова Татьяна Сергеевна"));

        $overriddenTruncater1 = new Truncater(['length' => 17]);
        $this->assertSame("Бурлакова Татьяна...", $overriddenTruncater1->truncate("Бурлакова Татьяна Сергеевна"));
        $this->assertSame("Бурлакова Татьяна**", $overriddenTruncater1->truncate("Бурлакова Татьяна Сергеевна", ['separator' => '**']));

        $overriddenTruncater2 = new Truncater(['length' => 17, 'separator' => '\\\']);
        $this->assertSame("Бурлакова Татьяна\\\", $overriddenTruncater2->truncate("Бурлакова Татьяна Сергеевна"));
    }
}
