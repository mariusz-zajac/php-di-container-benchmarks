<?php

namespace DiContainerBenchmarks\Container\Phalcon;

use DiContainerBenchmarks\Fixture\Class1;
use DiContainerBenchmarks\Fixture\Class2;
use DiContainerBenchmarks\Fixture\Class3;
use DiContainerBenchmarks\Fixture\Class4;
use DiContainerBenchmarks\Fixture\Class5;
use DiContainerBenchmarks\Fixture\Class6;
use DiContainerBenchmarks\Fixture\Class7;
use DiContainerBenchmarks\Fixture\Class8;
use DiContainerBenchmarks\Fixture\Class9;
use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class11;
use DiContainerBenchmarks\Fixture\Class12;
use DiContainerBenchmarks\Fixture\Class13;
use DiContainerBenchmarks\Fixture\Class14;
use DiContainerBenchmarks\Fixture\Class15;
use DiContainerBenchmarks\Fixture\Class16;
use DiContainerBenchmarks\Fixture\Class17;
use DiContainerBenchmarks\Fixture\Class18;
use DiContainerBenchmarks\Fixture\Class19;
use DiContainerBenchmarks\Fixture\Class20;
use DiContainerBenchmarks\Fixture\Class21;
use DiContainerBenchmarks\Fixture\Class22;
use DiContainerBenchmarks\Fixture\Class23;
use DiContainerBenchmarks\Fixture\Class24;
use DiContainerBenchmarks\Fixture\Class25;
use DiContainerBenchmarks\Fixture\Class26;
use DiContainerBenchmarks\Fixture\Class27;
use DiContainerBenchmarks\Fixture\Class28;
use DiContainerBenchmarks\Fixture\Class29;
use DiContainerBenchmarks\Fixture\Class30;
use DiContainerBenchmarks\Fixture\Class31;
use DiContainerBenchmarks\Fixture\Class32;
use DiContainerBenchmarks\Fixture\Class33;
use DiContainerBenchmarks\Fixture\Class34;
use DiContainerBenchmarks\Fixture\Class35;
use DiContainerBenchmarks\Fixture\Class36;
use DiContainerBenchmarks\Fixture\Class37;
use DiContainerBenchmarks\Fixture\Class38;
use DiContainerBenchmarks\Fixture\Class39;
use DiContainerBenchmarks\Fixture\Class40;
use DiContainerBenchmarks\Fixture\Class41;
use DiContainerBenchmarks\Fixture\Class42;
use DiContainerBenchmarks\Fixture\Class43;
use DiContainerBenchmarks\Fixture\Class44;
use DiContainerBenchmarks\Fixture\Class45;
use DiContainerBenchmarks\Fixture\Class46;
use DiContainerBenchmarks\Fixture\Class47;
use DiContainerBenchmarks\Fixture\Class48;
use DiContainerBenchmarks\Fixture\Class49;
use DiContainerBenchmarks\Fixture\Class50;
use DiContainerBenchmarks\Fixture\Class51;
use DiContainerBenchmarks\Fixture\Class52;
use DiContainerBenchmarks\Fixture\Class53;
use DiContainerBenchmarks\Fixture\Class54;
use DiContainerBenchmarks\Fixture\Class55;
use DiContainerBenchmarks\Fixture\Class56;
use DiContainerBenchmarks\Fixture\Class57;
use DiContainerBenchmarks\Fixture\Class58;
use DiContainerBenchmarks\Fixture\Class59;
use DiContainerBenchmarks\Fixture\Class60;
use DiContainerBenchmarks\Fixture\Class61;
use DiContainerBenchmarks\Fixture\Class62;
use DiContainerBenchmarks\Fixture\Class63;
use DiContainerBenchmarks\Fixture\Class64;
use DiContainerBenchmarks\Fixture\Class65;
use DiContainerBenchmarks\Fixture\Class66;
use DiContainerBenchmarks\Fixture\Class67;
use DiContainerBenchmarks\Fixture\Class68;
use DiContainerBenchmarks\Fixture\Class69;
use DiContainerBenchmarks\Fixture\Class70;
use DiContainerBenchmarks\Fixture\Class71;
use DiContainerBenchmarks\Fixture\Class72;
use DiContainerBenchmarks\Fixture\Class73;
use DiContainerBenchmarks\Fixture\Class74;
use DiContainerBenchmarks\Fixture\Class75;
use DiContainerBenchmarks\Fixture\Class76;
use DiContainerBenchmarks\Fixture\Class77;
use DiContainerBenchmarks\Fixture\Class78;
use DiContainerBenchmarks\Fixture\Class79;
use DiContainerBenchmarks\Fixture\Class80;
use DiContainerBenchmarks\Fixture\Class81;
use DiContainerBenchmarks\Fixture\Class82;
use DiContainerBenchmarks\Fixture\Class83;
use DiContainerBenchmarks\Fixture\Class84;
use DiContainerBenchmarks\Fixture\Class85;
use DiContainerBenchmarks\Fixture\Class86;
use DiContainerBenchmarks\Fixture\Class87;
use DiContainerBenchmarks\Fixture\Class88;
use DiContainerBenchmarks\Fixture\Class89;
use DiContainerBenchmarks\Fixture\Class90;
use DiContainerBenchmarks\Fixture\Class91;
use DiContainerBenchmarks\Fixture\Class92;
use DiContainerBenchmarks\Fixture\Class93;
use DiContainerBenchmarks\Fixture\Class94;
use DiContainerBenchmarks\Fixture\Class95;
use DiContainerBenchmarks\Fixture\Class96;
use DiContainerBenchmarks\Fixture\Class97;
use DiContainerBenchmarks\Fixture\Class98;
use DiContainerBenchmarks\Fixture\Class99;
use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Test\TestInterface;
use Phalcon\Di;

abstract class AbstractPhalconTest implements TestInterface
{
    protected Di $container;

    protected function setContainerWithPrototypeServices(): void
    {
        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Class" . $i . ";\n";
           }

           for ($i = 2; $i <= 100; $i++) {
               echo "\$container->set(Class" . $i . "::class, function () {\n";
               echo "    return new Class" . $i . "(\$this->get(Class" . ($i-1) . "::class));\n";
               echo "});\n\n";
           }
         */
        $container = new Di();

        $container->set(Class1::class, function () {
            return new Class1();
        });

        $container->set(Class2::class, function () {
            return new Class2($this->get(Class1::class));
        });

        $container->set(Class3::class, function () {
            return new Class3($this->get(Class2::class));
        });

        $container->set(Class4::class, function () {
            return new Class4($this->get(Class3::class));
        });

        $container->set(Class5::class, function () {
            return new Class5($this->get(Class4::class));
        });

        $container->set(Class6::class, function () {
            return new Class6($this->get(Class5::class));
        });

        $container->set(Class7::class, function () {
            return new Class7($this->get(Class6::class));
        });

        $container->set(Class8::class, function () {
            return new Class8($this->get(Class7::class));
        });

        $container->set(Class9::class, function () {
            return new Class9($this->get(Class8::class));
        });

        $container->set(Class10::class, function () {
            return new Class10($this->get(Class9::class));
        });

        $container->set(Class11::class, function () {
            return new Class11($this->get(Class10::class));
        });

        $container->set(Class12::class, function () {
            return new Class12($this->get(Class11::class));
        });

        $container->set(Class13::class, function () {
            return new Class13($this->get(Class12::class));
        });

        $container->set(Class14::class, function () {
            return new Class14($this->get(Class13::class));
        });

        $container->set(Class15::class, function () {
            return new Class15($this->get(Class14::class));
        });

        $container->set(Class16::class, function () {
            return new Class16($this->get(Class15::class));
        });

        $container->set(Class17::class, function () {
            return new Class17($this->get(Class16::class));
        });

        $container->set(Class18::class, function () {
            return new Class18($this->get(Class17::class));
        });

        $container->set(Class19::class, function () {
            return new Class19($this->get(Class18::class));
        });

        $container->set(Class20::class, function () {
            return new Class20($this->get(Class19::class));
        });

        $container->set(Class21::class, function () {
            return new Class21($this->get(Class20::class));
        });

        $container->set(Class22::class, function () {
            return new Class22($this->get(Class21::class));
        });

        $container->set(Class23::class, function () {
            return new Class23($this->get(Class22::class));
        });

        $container->set(Class24::class, function () {
            return new Class24($this->get(Class23::class));
        });

        $container->set(Class25::class, function () {
            return new Class25($this->get(Class24::class));
        });

        $container->set(Class26::class, function () {
            return new Class26($this->get(Class25::class));
        });

        $container->set(Class27::class, function () {
            return new Class27($this->get(Class26::class));
        });

        $container->set(Class28::class, function () {
            return new Class28($this->get(Class27::class));
        });

        $container->set(Class29::class, function () {
            return new Class29($this->get(Class28::class));
        });

        $container->set(Class30::class, function () {
            return new Class30($this->get(Class29::class));
        });

        $container->set(Class31::class, function () {
            return new Class31($this->get(Class30::class));
        });

        $container->set(Class32::class, function () {
            return new Class32($this->get(Class31::class));
        });

        $container->set(Class33::class, function () {
            return new Class33($this->get(Class32::class));
        });

        $container->set(Class34::class, function () {
            return new Class34($this->get(Class33::class));
        });

        $container->set(Class35::class, function () {
            return new Class35($this->get(Class34::class));
        });

        $container->set(Class36::class, function () {
            return new Class36($this->get(Class35::class));
        });

        $container->set(Class37::class, function () {
            return new Class37($this->get(Class36::class));
        });

        $container->set(Class38::class, function () {
            return new Class38($this->get(Class37::class));
        });

        $container->set(Class39::class, function () {
            return new Class39($this->get(Class38::class));
        });

        $container->set(Class40::class, function () {
            return new Class40($this->get(Class39::class));
        });

        $container->set(Class41::class, function () {
            return new Class41($this->get(Class40::class));
        });

        $container->set(Class42::class, function () {
            return new Class42($this->get(Class41::class));
        });

        $container->set(Class43::class, function () {
            return new Class43($this->get(Class42::class));
        });

        $container->set(Class44::class, function () {
            return new Class44($this->get(Class43::class));
        });

        $container->set(Class45::class, function () {
            return new Class45($this->get(Class44::class));
        });

        $container->set(Class46::class, function () {
            return new Class46($this->get(Class45::class));
        });

        $container->set(Class47::class, function () {
            return new Class47($this->get(Class46::class));
        });

        $container->set(Class48::class, function () {
            return new Class48($this->get(Class47::class));
        });

        $container->set(Class49::class, function () {
            return new Class49($this->get(Class48::class));
        });

        $container->set(Class50::class, function () {
            return new Class50($this->get(Class49::class));
        });

        $container->set(Class51::class, function () {
            return new Class51($this->get(Class50::class));
        });

        $container->set(Class52::class, function () {
            return new Class52($this->get(Class51::class));
        });

        $container->set(Class53::class, function () {
            return new Class53($this->get(Class52::class));
        });

        $container->set(Class54::class, function () {
            return new Class54($this->get(Class53::class));
        });

        $container->set(Class55::class, function () {
            return new Class55($this->get(Class54::class));
        });

        $container->set(Class56::class, function () {
            return new Class56($this->get(Class55::class));
        });

        $container->set(Class57::class, function () {
            return new Class57($this->get(Class56::class));
        });

        $container->set(Class58::class, function () {
            return new Class58($this->get(Class57::class));
        });

        $container->set(Class59::class, function () {
            return new Class59($this->get(Class58::class));
        });

        $container->set(Class60::class, function () {
            return new Class60($this->get(Class59::class));
        });

        $container->set(Class61::class, function () {
            return new Class61($this->get(Class60::class));
        });

        $container->set(Class62::class, function () {
            return new Class62($this->get(Class61::class));
        });

        $container->set(Class63::class, function () {
            return new Class63($this->get(Class62::class));
        });

        $container->set(Class64::class, function () {
            return new Class64($this->get(Class63::class));
        });

        $container->set(Class65::class, function () {
            return new Class65($this->get(Class64::class));
        });

        $container->set(Class66::class, function () {
            return new Class66($this->get(Class65::class));
        });

        $container->set(Class67::class, function () {
            return new Class67($this->get(Class66::class));
        });

        $container->set(Class68::class, function () {
            return new Class68($this->get(Class67::class));
        });

        $container->set(Class69::class, function () {
            return new Class69($this->get(Class68::class));
        });

        $container->set(Class70::class, function () {
            return new Class70($this->get(Class69::class));
        });

        $container->set(Class71::class, function () {
            return new Class71($this->get(Class70::class));
        });

        $container->set(Class72::class, function () {
            return new Class72($this->get(Class71::class));
        });

        $container->set(Class73::class, function () {
            return new Class73($this->get(Class72::class));
        });

        $container->set(Class74::class, function () {
            return new Class74($this->get(Class73::class));
        });

        $container->set(Class75::class, function () {
            return new Class75($this->get(Class74::class));
        });

        $container->set(Class76::class, function () {
            return new Class76($this->get(Class75::class));
        });

        $container->set(Class77::class, function () {
            return new Class77($this->get(Class76::class));
        });

        $container->set(Class78::class, function () {
            return new Class78($this->get(Class77::class));
        });

        $container->set(Class79::class, function () {
            return new Class79($this->get(Class78::class));
        });

        $container->set(Class80::class, function () {
            return new Class80($this->get(Class79::class));
        });

        $container->set(Class81::class, function () {
            return new Class81($this->get(Class80::class));
        });

        $container->set(Class82::class, function () {
            return new Class82($this->get(Class81::class));
        });

        $container->set(Class83::class, function () {
            return new Class83($this->get(Class82::class));
        });

        $container->set(Class84::class, function () {
            return new Class84($this->get(Class83::class));
        });

        $container->set(Class85::class, function () {
            return new Class85($this->get(Class84::class));
        });

        $container->set(Class86::class, function () {
            return new Class86($this->get(Class85::class));
        });

        $container->set(Class87::class, function () {
            return new Class87($this->get(Class86::class));
        });

        $container->set(Class88::class, function () {
            return new Class88($this->get(Class87::class));
        });

        $container->set(Class89::class, function () {
            return new Class89($this->get(Class88::class));
        });

        $container->set(Class90::class, function () {
            return new Class90($this->get(Class89::class));
        });

        $container->set(Class91::class, function () {
            return new Class91($this->get(Class90::class));
        });

        $container->set(Class92::class, function () {
            return new Class92($this->get(Class91::class));
        });

        $container->set(Class93::class, function () {
            return new Class93($this->get(Class92::class));
        });

        $container->set(Class94::class, function () {
            return new Class94($this->get(Class93::class));
        });

        $container->set(Class95::class, function () {
            return new Class95($this->get(Class94::class));
        });

        $container->set(Class96::class, function () {
            return new Class96($this->get(Class95::class));
        });

        $container->set(Class97::class, function () {
            return new Class97($this->get(Class96::class));
        });

        $container->set(Class98::class, function () {
            return new Class98($this->get(Class97::class));
        });

        $container->set(Class99::class, function () {
            return new Class99($this->get(Class98::class));
        });

        $container->set(Class100::class, function () {
            return new Class100($this->get(Class99::class));
        });

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Class" . $i . ";\n";
           }

           for ($i = 2; $i <= 100; $i++) {
               echo "\$container->setShared(Class" . $i . "::class, function () {\n";
               echo "    return new Class" . $i . "(\$this->getShared(Class" . ($i-1) . "::class));\n";
               echo "});\n\n";
           }
         */
        $container = new Di();

        $container->setShared(Class1::class, function () {
            return new Class1();
        });

        $container->setShared(Class2::class, function () {
            return new Class2($this->getShared(Class1::class));
        });

        $container->setShared(Class3::class, function () {
            return new Class3($this->getShared(Class2::class));
        });

        $container->setShared(Class4::class, function () {
            return new Class4($this->getShared(Class3::class));
        });

        $container->setShared(Class5::class, function () {
            return new Class5($this->getShared(Class4::class));
        });

        $container->setShared(Class6::class, function () {
            return new Class6($this->getShared(Class5::class));
        });

        $container->setShared(Class7::class, function () {
            return new Class7($this->getShared(Class6::class));
        });

        $container->setShared(Class8::class, function () {
            return new Class8($this->getShared(Class7::class));
        });

        $container->setShared(Class9::class, function () {
            return new Class9($this->getShared(Class8::class));
        });

        $container->setShared(Class10::class, function () {
            return new Class10($this->getShared(Class9::class));
        });

        $container->setShared(Class11::class, function () {
            return new Class11($this->getShared(Class10::class));
        });

        $container->setShared(Class12::class, function () {
            return new Class12($this->getShared(Class11::class));
        });

        $container->setShared(Class13::class, function () {
            return new Class13($this->getShared(Class12::class));
        });

        $container->setShared(Class14::class, function () {
            return new Class14($this->getShared(Class13::class));
        });

        $container->setShared(Class15::class, function () {
            return new Class15($this->getShared(Class14::class));
        });

        $container->setShared(Class16::class, function () {
            return new Class16($this->getShared(Class15::class));
        });

        $container->setShared(Class17::class, function () {
            return new Class17($this->getShared(Class16::class));
        });

        $container->setShared(Class18::class, function () {
            return new Class18($this->getShared(Class17::class));
        });

        $container->setShared(Class19::class, function () {
            return new Class19($this->getShared(Class18::class));
        });

        $container->setShared(Class20::class, function () {
            return new Class20($this->getShared(Class19::class));
        });

        $container->setShared(Class21::class, function () {
            return new Class21($this->getShared(Class20::class));
        });

        $container->setShared(Class22::class, function () {
            return new Class22($this->getShared(Class21::class));
        });

        $container->setShared(Class23::class, function () {
            return new Class23($this->getShared(Class22::class));
        });

        $container->setShared(Class24::class, function () {
            return new Class24($this->getShared(Class23::class));
        });

        $container->setShared(Class25::class, function () {
            return new Class25($this->getShared(Class24::class));
        });

        $container->setShared(Class26::class, function () {
            return new Class26($this->getShared(Class25::class));
        });

        $container->setShared(Class27::class, function () {
            return new Class27($this->getShared(Class26::class));
        });

        $container->setShared(Class28::class, function () {
            return new Class28($this->getShared(Class27::class));
        });

        $container->setShared(Class29::class, function () {
            return new Class29($this->getShared(Class28::class));
        });

        $container->setShared(Class30::class, function () {
            return new Class30($this->getShared(Class29::class));
        });

        $container->setShared(Class31::class, function () {
            return new Class31($this->getShared(Class30::class));
        });

        $container->setShared(Class32::class, function () {
            return new Class32($this->getShared(Class31::class));
        });

        $container->setShared(Class33::class, function () {
            return new Class33($this->getShared(Class32::class));
        });

        $container->setShared(Class34::class, function () {
            return new Class34($this->getShared(Class33::class));
        });

        $container->setShared(Class35::class, function () {
            return new Class35($this->getShared(Class34::class));
        });

        $container->setShared(Class36::class, function () {
            return new Class36($this->getShared(Class35::class));
        });

        $container->setShared(Class37::class, function () {
            return new Class37($this->getShared(Class36::class));
        });

        $container->setShared(Class38::class, function () {
            return new Class38($this->getShared(Class37::class));
        });

        $container->setShared(Class39::class, function () {
            return new Class39($this->getShared(Class38::class));
        });

        $container->setShared(Class40::class, function () {
            return new Class40($this->getShared(Class39::class));
        });

        $container->setShared(Class41::class, function () {
            return new Class41($this->getShared(Class40::class));
        });

        $container->setShared(Class42::class, function () {
            return new Class42($this->getShared(Class41::class));
        });

        $container->setShared(Class43::class, function () {
            return new Class43($this->getShared(Class42::class));
        });

        $container->setShared(Class44::class, function () {
            return new Class44($this->getShared(Class43::class));
        });

        $container->setShared(Class45::class, function () {
            return new Class45($this->getShared(Class44::class));
        });

        $container->setShared(Class46::class, function () {
            return new Class46($this->getShared(Class45::class));
        });

        $container->setShared(Class47::class, function () {
            return new Class47($this->getShared(Class46::class));
        });

        $container->setShared(Class48::class, function () {
            return new Class48($this->getShared(Class47::class));
        });

        $container->setShared(Class49::class, function () {
            return new Class49($this->getShared(Class48::class));
        });

        $container->setShared(Class50::class, function () {
            return new Class50($this->getShared(Class49::class));
        });

        $container->setShared(Class51::class, function () {
            return new Class51($this->getShared(Class50::class));
        });

        $container->setShared(Class52::class, function () {
            return new Class52($this->getShared(Class51::class));
        });

        $container->setShared(Class53::class, function () {
            return new Class53($this->getShared(Class52::class));
        });

        $container->setShared(Class54::class, function () {
            return new Class54($this->getShared(Class53::class));
        });

        $container->setShared(Class55::class, function () {
            return new Class55($this->getShared(Class54::class));
        });

        $container->setShared(Class56::class, function () {
            return new Class56($this->getShared(Class55::class));
        });

        $container->setShared(Class57::class, function () {
            return new Class57($this->getShared(Class56::class));
        });

        $container->setShared(Class58::class, function () {
            return new Class58($this->getShared(Class57::class));
        });

        $container->setShared(Class59::class, function () {
            return new Class59($this->getShared(Class58::class));
        });

        $container->setShared(Class60::class, function () {
            return new Class60($this->getShared(Class59::class));
        });

        $container->setShared(Class61::class, function () {
            return new Class61($this->getShared(Class60::class));
        });

        $container->setShared(Class62::class, function () {
            return new Class62($this->getShared(Class61::class));
        });

        $container->setShared(Class63::class, function () {
            return new Class63($this->getShared(Class62::class));
        });

        $container->setShared(Class64::class, function () {
            return new Class64($this->getShared(Class63::class));
        });

        $container->setShared(Class65::class, function () {
            return new Class65($this->getShared(Class64::class));
        });

        $container->setShared(Class66::class, function () {
            return new Class66($this->getShared(Class65::class));
        });

        $container->setShared(Class67::class, function () {
            return new Class67($this->getShared(Class66::class));
        });

        $container->setShared(Class68::class, function () {
            return new Class68($this->getShared(Class67::class));
        });

        $container->setShared(Class69::class, function () {
            return new Class69($this->getShared(Class68::class));
        });

        $container->setShared(Class70::class, function () {
            return new Class70($this->getShared(Class69::class));
        });

        $container->setShared(Class71::class, function () {
            return new Class71($this->getShared(Class70::class));
        });

        $container->setShared(Class72::class, function () {
            return new Class72($this->getShared(Class71::class));
        });

        $container->setShared(Class73::class, function () {
            return new Class73($this->getShared(Class72::class));
        });

        $container->setShared(Class74::class, function () {
            return new Class74($this->getShared(Class73::class));
        });

        $container->setShared(Class75::class, function () {
            return new Class75($this->getShared(Class74::class));
        });

        $container->setShared(Class76::class, function () {
            return new Class76($this->getShared(Class75::class));
        });

        $container->setShared(Class77::class, function () {
            return new Class77($this->getShared(Class76::class));
        });

        $container->setShared(Class78::class, function () {
            return new Class78($this->getShared(Class77::class));
        });

        $container->setShared(Class79::class, function () {
            return new Class79($this->getShared(Class78::class));
        });

        $container->setShared(Class80::class, function () {
            return new Class80($this->getShared(Class79::class));
        });

        $container->setShared(Class81::class, function () {
            return new Class81($this->getShared(Class80::class));
        });

        $container->setShared(Class82::class, function () {
            return new Class82($this->getShared(Class81::class));
        });

        $container->setShared(Class83::class, function () {
            return new Class83($this->getShared(Class82::class));
        });

        $container->setShared(Class84::class, function () {
            return new Class84($this->getShared(Class83::class));
        });

        $container->setShared(Class85::class, function () {
            return new Class85($this->getShared(Class84::class));
        });

        $container->setShared(Class86::class, function () {
            return new Class86($this->getShared(Class85::class));
        });

        $container->setShared(Class87::class, function () {
            return new Class87($this->getShared(Class86::class));
        });

        $container->setShared(Class88::class, function () {
            return new Class88($this->getShared(Class87::class));
        });

        $container->setShared(Class89::class, function () {
            return new Class89($this->getShared(Class88::class));
        });

        $container->setShared(Class90::class, function () {
            return new Class90($this->getShared(Class89::class));
        });

        $container->setShared(Class91::class, function () {
            return new Class91($this->getShared(Class90::class));
        });

        $container->setShared(Class92::class, function () {
            return new Class92($this->getShared(Class91::class));
        });

        $container->setShared(Class93::class, function () {
            return new Class93($this->getShared(Class92::class));
        });

        $container->setShared(Class94::class, function () {
            return new Class94($this->getShared(Class93::class));
        });

        $container->setShared(Class95::class, function () {
            return new Class95($this->getShared(Class94::class));
        });

        $container->setShared(Class96::class, function () {
            return new Class96($this->getShared(Class95::class));
        });

        $container->setShared(Class97::class, function () {
            return new Class97($this->getShared(Class96::class));
        });

        $container->setShared(Class98::class, function () {
            return new Class98($this->getShared(Class97::class));
        });

        $container->setShared(Class99::class, function () {
            return new Class99($this->getShared(Class98::class));
        });

        $container->setShared(Class100::class, function () {
            return new Class100($this->getShared(Class99::class));
        });

        $this->container = $container;
    }
}
