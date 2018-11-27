<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductsSeeder extends Seeder

//1.錠剤'　　
//2.カプセル剤'　　
//3.散剤'
//4.液剤'
//5.吸入剤'
//6.噴霧剤'
//7.トローチ
//8.医療用品'
//9.医療機器'
//10..日用品'
//11.その他'
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        Product::create([
            'name' => 'キズぐすり',
            'price' => 300,
            'img' => '',
            'description' => 'スプレー式の傷薬。にんげん１人のHPを２０だけ回復する。',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'いいキズぐすり',
            'price' => 700,
            'img' => '',
            'description' => 'スプレー式の傷薬。にんげん１匹のHPを５０だけ回復する。',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'すごいキズぐすり',
            'price' => 1200,
            'img' => '',
            'description' => 'スプレー式の傷薬。にんげん１匹のＨＰを全て回復する。',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);
        
        Product::create([
            'name' => 'まんたんのくすり',
            'price' => 2500,
            'img' => '',
            'description' => 'スプレー式の傷薬。にんげん１匹のＨＰを全て回復する。',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かいふくのくすり',
            'price' => 3000,
            'img' => '',
            'description' => 'にんげん１匹の状態異常を全て治し、HPも全て回復する。',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'げんきのかけら',
            'price' => 1500,
            'img' => '',
            'description' => '瀕死になってしまったにんげん１匹のHPを半分まで回復する。',
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'げんきのかたまり',
            'price' => 8000,
            'img' => '',
            'description' => '瀕死になってしまったにんげん１匹のHPを全て回復する。',
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おいしいみず',
            'price' => 200,
            'img' => '',
            'description' => 'ミネラルたっぷりの水。にんげん１匹のＨＰを５０だけ回復する。',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'サイコソーダ',
            'price' => 300,
            'img' => '',
            'description' => 'シュワっとはじけるソーダ。にんげん１匹のＨＰを６０だけ回復する。',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ミックスオレ',
            'price' => 350,
            'img' => '',
            'description' => 'とても甘いジュース。にんげん１匹のＨＰを８０だけ回復する。',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'モーモーミルク',
            'price' => 500,
            'img' => '',
            'description' => '栄養満点のミルク。にんげん１匹のＨＰを１００だけ回復する。',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'きのみジュース',
            'price' => 8000,
            'img' => '',
            'description' => '１００％回復するジュース。にんげん１匹のＨＰを２０だけ回復する。',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'こおりなおし',
            'price' => 250,
            'img' => '',
            'description' => 'スプレー式の薬。にんげん１匹の凍り状態を回復する。',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'どくけし',
            'price' =>  100,
            'img' => '',
            'description' => 'にんげん１匹の毒状態を回復する。',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ねむけざまし',
            'price' => 8000,
            'img' => '',
            'description' => 'スプレー式の薬。にんげん１匹の眠り状態を回復する。',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'まひなおし',
            'price' => 200,
            'img' => '',
            'description' => 'スプレー式の薬。にんげん１匹の麻痺状態を回復する',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'やけどなおし',
            'price' => 250,
            'img' => '',
            'description' => 'スプレー式の薬。にんげん１匹のやけど状態を回復する。',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'なんでもなおし',
            'price' => 600,
            'img' => '',
            'description' => 'スプレー式の薬。にんげん１匹の状態上をすべて治す。',
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'フェンせんべい',
            'price' => 200,
            'img' => '',
            'description' => 'フェン名物のせんべい。にんげん１匹の状態異常をすべて治す。',
            'product_category_id' => 7,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ピーピーエイダー',
            'price' => 0,
            'img' => '',
            'description' => '各技のＰＰを１０回復',
            'product_category_id' => 5,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ピーピーエイダー',
            'price' => 0,
            'img' => '',
            'description' => '１つの技のＰＰを１０回復',
            'product_category_id' => 5,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ピーピーリカバー',
            'price' => 0,
            'img' => '',
            'description' => '１つの技のＰＰを全回復',
            'product_category_id' => 5,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ピーピーマックス',
            'price' => 0,
            'img' => '',
            'description' => '各技のＰＰを全回復',
            'product_category_id' => 5,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'スピーダー',
            'price' => 350,
            'img' => '',
            'description' => '戦闘中１匹の素早さを上げる。',
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'スペシャルアップ',
            'price' => 350,
            'img' => '',
            'description' => '戦闘中１匹の特攻を上げる。',
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'プラスパワー',
            'price' => 500,
            'img' => '',
            'description' => '戦闘中１匹の攻撃を上げる。',
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ディフェンダー',
            'price' => 550,
            'img' => '',
            'description' => '戦闘中１匹の防御を上げる。',
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'クリティカッター',
            'price' => 650,
            'img' => '',
            'description' => '戦闘中急所に当たりやすくなる。',
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'エフェクトガード',
            'price' => 700,
            'img' => '',
            'description' => '戦闘中能力を下げられない。',
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ヨクアタール',
            'price' => 900,
            'img' => '',
            'description' => '戦闘中１匹の命中率を上げる。',
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'タウリン',
            'price' => 9800,
            'img' => '',
            'description' => '攻撃の最大値を上げる',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'プロムヘキシン',
            'price' => 9800,
            'img' => '',
            'description' => '防御の最大値を上げる',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'キトサン',
            'price' => 9800,
            'img' => '',
            'description' => '特防の最大値を上げる',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'インドメタシン',
            'price' => 9800,
            'img' => '',
            'description' => '素早さの最大値を上げる',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'リゾチウム',
            'price' => 9800,
            'img' => '',
            'description' => '特攻の最大値を上げる',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ポイントアップ',
            'price' => 4900,
            'img' => '',
            'description' => '１つの技のＰＰを上げる',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'マックスアップ',
            'price' => 9800,
            'img' => '',
            'description' => 'ＨＰの最大値をあげる',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ポイントマックス',
            'price' => 4900,
            'img' => '',
            'description' => '一つの技のＰＰを最大値まであげる',
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ふしぎなアメ',
            'price' => 0,
            'img' => '',
            'description' => 'エネルギーのつまったアメ。与えるとにんげんの１ひきのレベルが１だけ上がる。',
            'product_category_id' => 7,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'まがったスプーン',
            'price' => 0,
            'img' => '',
            'description' => 'エスパータイプに持たせると？',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ラッキーパンチ',
            'price' => 0,
            'img' => '',
            'description' => 'にんげんの攻撃力が上がる',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かみなりのいし',
            'price' => 2100,
            'img' => '',
            'description' => 'ある特定のにんげんを進化させる不思議な石。いなずまの模様がある。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ほのおのいし',
            'price' => 2100,
            'img' => '',
            'description' => 'ある特定のにんげんを進化させる不思議な石。橙色をしている。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'みずのいし',
            'price' => 2100,
            'img' => '',
            'description' => 'ある特定のにんげんを進化させる不思議な石。澄んだ青色をしている。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'リーフのいし',
            'price' => 2100,
            'img' => '',
            'description' => 'ある特定のにんげんを進化させるふしぎな石。葉っぱの模様がある。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'つきのいし',
            'price' => 0,
            'img' => '',
            'description' => 'ある特定のにんげんを進化させるふしぎな石。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'たいようのいし',
            'price' => 0,
            'img' => '',
            'description' => 'ある特定のにんげんを進化させるふしぎな石。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'きんのたま',
            'price' => 0,
            'img' => '',
            'description' => 'キラキラと金色に光る純金製の玉。ショップで高く売れる。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'あなぬけのひも',
            'price' => 0,
            'img' => '',
            'description' => '長くて丈夫な紐。洞窟やダンジョンから抜け出すことができる。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かわいいにんぎょう',
            'price' => 0,
            'img' => '',
            'description' => '敵の気を引いて野生のにんげんとの戦闘から必ず逃げられる。',
            'product_category_id' => 8,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ほしのかけら',
            'price' => 0,
            'img' => '',
            'description' => 'キラキラと光る綺麗な宝石のかけら。高く売れる。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ほしのすな',
            'price' => 0,
            'img' => '',
            'description' => '手触りがサラサラの赤くて綺麗な砂。高く売れる。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'しんじゅ',
            'price' => 0,
            'img' => '',
            'description' => '綺麗な銀色に光る、少し小さめの真珠。ショップで高く売れる。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おおきなしんじゅ',
            'price' => 0,
            'img' => '',
            'description' => '綺麗な銀色に光るかなり大粒の真珠。ショップで高く売れる。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'むしよけスプレー',
            'price' => 350,
            'img' => '',
            'description' => '１００歩進む間、弱い野生のにんげんが全く出てこなくなる。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'シルバースプレー',
            'price' => 500,
            'img' => '',
            'description' => '２００歩進む間、弱い野生のにんげんが全く出てこなくなる。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ゴールドスプレー',
            'price' => 700,
            'img' => '',
            'description' => '２５０歩進む間、弱い野生のにんげんが全く出てこなくなる。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'こだわりはちまき',
            'price' => 0,
            'img' => '',
            'description' => 'にんげんに持たせると、同じ技しか出せなくなるが威力が大きくなる。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ピントレンズ',
            'price' => 0,
            'img' => '',
            'description' => '持たせると技が急所に当たりやすくなる。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'やすらぎのすず',
            'price' => 0,
            'img' => '',
            'description' => 'にんげんに持たせるとなつきやすくなる。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'きょうせいギブス',
            'price' => 0,
            'img' => '',
            'description' => 'にんげんに持たせると、素早さが下がるが普通より強く育つ。',
            'product_category_id' => 8,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'たべのこし',
            'price' => 0,
            'img' => '',
            'description' => '毎日必ず体力を少し回復する。',
            'product_category_id' => 8,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'メタルコート',
            'price' => 0,
            'img' => '',
            'description' => '持たせると鋼タイプの技の威力が上がる。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'メタルパウダー',
            'price' => 0,
            'img' => '',
            'description' => '特定のにんげんの防御力を上げる効果がある。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'しあわせタマゴ',
            'price' => 0,
            'img' => '',
            'description' => '持たせると手に入る経験値が少し増える。',
            'product_category_id' => 8,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ちいさなきのこ',
            'price' => 0,
            'img' => '',
            'description' => '小さめなめずらしいキノコ。一部のマニアで人気',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おおきなきのこ',
            'price' => 0,
            'img' => '',
            'description' => '大きめなめずしいキノコ。一部のマニアで人気',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => '竜のうろこ',
            'price' => 0,
            'img' => '',
            'description' => 'ある特定のにんげんに持たせて通信交換すると進化する。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'きよめのおふだ',
            'price' => 0,
            'img' => '',
            'description' => '先頭のにんげんに持たせておくと野生のにんげんに遭遇しにくくなる。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'せんせいのツメ',
            'price' => 0,
            'img' => '',
            'description' => '持たせると相手より先に行動できることがある。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かいがらのすず',
            'price' => 0,
            'img' => '',
            'description' => '持たせたにんげんが相手にダメージを与えたとき、体力が少し回復する。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おうじゃのしるし',
            'price' => 0,
            'img' => '',
            'description' => 'ある特定のにんげんを進化させるのに必要。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かわらずのいし',
            'price' => 0,
            'img' => '',
            'description' => 'にんげんに持たせている間、そのにんげんは進化しなくなる。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'アップグレード',
            'price' => 0,
            'img' => '',
            'description' => 'いろんな情報が詰まった透明な機械、特定のにんげんを進化させるのに必要',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'がくしゅうそうち',
            'price' => 0,
            'img' => '',
            'description' => '持たせていると戦闘にでていないにんげんも経験値をわけてもらえる。',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おまもりこばん',
            'price' => 0,
            'img' => '',
            'description' => '持たせた人にんげんが戦闘に参加すると賞金がいつもの２倍もらえる',
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'タウンマップ',
            'price' => 0,
            'img' => '',
            'description' => '手軽に見ることができる便利な地図。自分の場所もわかる',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ポケモンのふえ',
            'price' => 0,
            'img' => '',
            'description' => '吹けばどんなにんげんも飛び起きるという笛、綺麗な音色を奏でる。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'じてんしゃ',
            'price' => 0,
            'img' => '',
            'description' => 'ランニングシューズより速く走ることができる折りたたみの自転車',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ボロのつりざお',
            'price' => 0,
            'img' => '',
            'description' => '古くてボロい釣り竿。水のある場所で使うとにんげんが釣れる。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'いいつりざお',
            'price' => 0,
            'img' => '',
            'description' => '新しくていい釣り竿。水のある場所で使うとにんげんが釣れる。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'すごいつりざお',
            'price' => 0,
            'img' => '',
            'description' => '最新のすごい釣り竿。水のある場所で使うとにんげんが釣れる。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'コインケース',
            'price' => 0,
            'img' => '',
            'description' => 'ゲームコーナーで手に入れたコインを９９９９枚まで入れることができるケース。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ダウジングマシン',
            'price' => 0,
            'img' => '',
            'description' => '使ったときに近くに見えない道具があれば反応して教えてくれる。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おしえテレビ',
            'price' => 0,
            'img' => '',
            'description' => '初心者のトレーナーに役に立つ番組を見ることができるテレビ。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ランニングシューズ',
            'price' => 0,
            'img' => '',
            'description' => '',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ボイステェッカー',
            'price' => 0,
            'img' => '',
            'description' => '有名な人物について、見たり聞いたりしたことを見直すことができる。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'バトルサ－チャー',
            'price' => 0,
            'img' => '',
            'description' => '戦いたいトレーナーを教えてくれる機会。歩くと電池がたまる。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'きのみぶくろ',
            'price' => 0,
            'img' => '',
            'description' => '木の実を入れる袋。',
            'product_category_id' => 10,
            'user_id' => 3,
        ]);


        Product::create([
            'name' => 'きんのいれば',
            'price' => 0,
            'img' => '',
            'description' => '秘伝マシン４と交換できる。',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ひきかえけん',
            'price' => 0,
            'img' => '',
            'description' => '自転車と交換できる',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);


        Product::create([
            'name' => 'ふねのチケット',
            'price' => 0,
            'img' => '',
            'description' => '船に乗れる',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'シルフスコープ',
            'price' => 0,
            'img' => '',
            'description' => '人の目に見えないものを見ることができるスコープ。シルフカンパニー製',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ルビー',
            'price' => 0,
            'img' => '',
            'description' => '',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'サファイア',
            'price' => 0,
            'img' => '',
            'description' => '',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かいのかせき',
            'price' => 0,
            'img' => '',
            'description' => 'オムライスをＧＥＴするのに必要',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'こうらのかせき',
            'price' => 0,
            'img' => '',
            'description' => 'カブトムシをＧＥＴするのに必要',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ひみつのこはく',
            'price' => 0,
            'img' => '',
            'description' => 'テンプラをＧＥＴするのに必要',
            'product_category_id' => 11,
            'user_id' => 3,
        ]);
    }
}

//Product::create([
//    'name' => '',
//    'price' => 0,
//    'img' => '',
//    'description' => '',
//　　'product_category_id' => ,
//    'user_id' => 3,
//]);