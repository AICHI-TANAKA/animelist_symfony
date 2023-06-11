<?php 
use PHPUnit\Framework\TestCase;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Animelist;
use App\Repository\AnimelistRepository;

class AnimelistRepositoryTest extends TestCase
{
    private $entityManager;
    private $repository;

    protected function setUp(): void
    {
        // EntityManagerInterfaceのモックを作成
        $this->entityManager = $this->createMock(EntityManagerInterface::class);
        
        // テスト対象のRepositoryクラスを作成
        $this->repository = new AnimelistRepository($this->entityManager);
    }

    public function testFindFilteredData()
    {
        // 仮のテストデータを作成
        $filter1 = '2021';
        $filter2 = 'autumn';

        // 期待される結果を定義
        $expectedResult = []; // 仮の結果

        // EntityManagerのメソッド呼び出しをモックし、期待される結果を返すように設定
        $this->entityManager->expects($this->once())
            ->method('createQueryBuilder')
            ->willReturnSelf();

        $this->entityManager->expects($this->once())
            ->method('getQuery')
            ->willReturnSelf();

        $this->entityManager->expects($this->once())
            ->method('getResult')
            ->willReturn($expectedResult);

        // Repositoryメソッドを呼び出し、結果を取得
        $result = $this->repository->findFilteredData($filter1, $filter2);

        // 期待される結果と一致するか検証
        $this->assertEquals($expectedResult, $result);
    }
}