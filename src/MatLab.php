<?php

/**
 * Class MatLab
 *
 * Criado Hélio Cardoso R. de Souza
 * User: Helio Cardoso <heliosouza@gmail.com>
 * Date: 04/10/19
 */
class MatLab
{
    const PATH = "/Hacktoberfest2019-1/issue1.txt";
    const PATH2 = "/Hacktoberfest2019-1/issue2.txt";


    public function soma(): void
    {
        $this->somaFromFileTxt();
    }

    public function soma2(): void
    {
        $this->somaFromFileTxt();
    }

    private function somaFromFileTxt(): void
    {
        $handler = fopen(self::PATH, 'r');
        $result = 1;
        file_put_contents(
            '/Hacktoberfest2019-1/issue1.txt',
            $result , FILE_APPEND
        );
        fclose($handler);

    }

    private function somaFromFileTxt2(): void
    {
        $handler = fopen(self::PATH, 'r');
        $result = 2;
        file_put_contents(
            '/Hacktoberfest2019-1/issue2.txt',
            $result , FILE_APPEND
        );
        fclose($handler);

    }
}
