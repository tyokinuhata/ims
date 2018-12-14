<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductsSeeder extends Seeder

/**
 * 商品のシーダー
 *
 * memo:
 * 1. 錠剤
 * 2. カプセル剤
 * 3. 散剤
 * 4. 液剤
 * 5. 吸入剤
 * 6. 噴霧剤
 * 7. トローチ
 * 8. 医療用品
 * 9. 医療機器
 * 10. 日用品
 * 11. その他
 */
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
            'img' => 'storage/images/products/potion.png',
            'description' => 'スプレー式の傷薬。にんげん１人のHPを２０だけ回復する。',
            'product_status_id' => 1,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'いいキズぐすり',
            'price' => 700,
            'img' => 'storage/images/products/super_potion.png',
            'description' => 'スプレー式の傷薬。にんげん１匹のHPを５０だけ回復する。',
            'product_status_id' => 3,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'すごいキズぐすり',
            'price' => 1200,
            'img' => 'storage/images/products/hyper_potion.png',
            'description' => 'スプレー式の傷薬。にんげん１匹のＨＰを全て回復する。',
            'product_status_id' => 2,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);
        
        Product::create([
            'name' => 'まんたんのくすり',
            'price' => 2500,
            'img' => 'storage/images/products/max_potion.png',
            'description' => 'スプレー式の傷薬。にんげん１匹のＨＰを全て回復する。',
            'product_status_id' => 1,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かいふくのくすり',
            'price' => 3000,
            'img' => 'storage/images/products/full_restore.png',
            'description' => 'にんげん１匹の状態異常を全て治し、HPも全て回復する。',
            'product_status_id' => 3,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'げんきのかけら',
            'price' => 1500,
            'img' => 'storage/images/products/revive.png',
            'description' => '瀕死になってしまったにんげん１匹のHPを半分まで回復する。',
            'product_status_id' => 1,
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'げんきのかたまり',
            'price' => 8000,
            'img' => 'storage/images/products/max_revive.png',
            'description' => '瀕死になってしまったにんげん１匹のHPを全て回復する。',
            'product_status_id' => 1,
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おいしいみず',
            'price' => 200,
            'img' => 'storage/images/products/fresh_water.png',
            'description' => 'ミネラルたっぷりの水。にんげん１匹のＨＰを５０だけ回復する。',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'サイコソーダ',
            'price' => 300,
            'img' => 'storage/images/products/soda_pop.png',
            'description' => 'シュワっとはじけるソーダ。にんげん１匹のＨＰを６０だけ回復する。',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ミックスオレ',
            'price' => 350,
            'img' => 'storage/images/products/lemonade.png',
            'description' => 'とても甘いジュース。にんげん１匹のＨＰを８０だけ回復する。',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'モーモーミルク',
            'price' => 500,
            'img' => 'storage/images/products/moomoo_milk.png',
            'description' => '栄養満点のミルク。にんげん１匹のＨＰを１００だけ回復する。',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'きのみジュース',
            'price' => 8000,
            'img' => 'storage/images/products/berry_juice.png',
            'description' => '１００％回復するジュース。にんげん１匹のＨＰを２０だけ回復する。',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'こおりなおし',
            'price' => 250,
            'img' => 'storage/images/products/ice_heal.png',
            'description' => 'スプレー式の薬。にんげん１匹の凍り状態を回復する。',
            'product_status_id' => 4,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'どくけし',
            'price' =>  100,
            'img' => 'storage/images/products/antidote_sprite.png',
            'description' => 'にんげん１匹の毒状態を回復する。',
            'product_status_id' => 2,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ねむけざまし',
            'price' => 8000,
            'img' => 'storage/images/products/dream_awakening.png',
            'description' => 'スプレー式の薬。にんげん１匹の眠り状態を回復する。',
            'product_status_id' => 4,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'まひなおし',
            'price' => 200,
            'img' => 'storage/images/products/paralyze_heal.png',
            'description' => 'スプレー式の薬。にんげん１匹の麻痺状態を回復する',
            'product_status_id' => 2,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'やけどなおし',
            'price' => 250,
            'img' => 'storage/images/products/burn_heal.png',
            'description' => 'スプレー式の薬。にんげん１匹のやけど状態を回復する。',
            'product_status_id' => 2,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'なんでもなおし',
            'price' => 600,
            'img' => 'storage/images/products/full_heal.png',
            'description' => 'スプレー式の薬。にんげん１匹の状態上をすべて治す。',
            'product_status_id' => 2,
            'product_category_id' => 6,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'フェンせんべい',
            'price' => 200,
            'img' => 'storage/images/products/lava_cookie.png',
            'description' => 'フェン名物のせんべい。にんげん１匹の状態異常をすべて治す。',
            'product_status_id' => 4,
            'product_category_id' => 7,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ピーピーエイダー',
            'price' => 0,
            'img' => 'storage/images/products/elixir.png',
            'description' => '各技のＰＰを１０回復',
            'product_status_id' => 2,
            'product_category_id' => 5,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ピーピーエイド',
            'price' => 0,
            'img' => 'storage/images/products/ether.png',
            'description' => '１つの技のＰＰを１０回復',
            'product_status_id' => 2,
            'product_category_id' => 5,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ピーピーリカバー',
            'price' => 0,
            'img' => 'storage/images/products/max_ether.png',
            'description' => '１つの技のＰＰを全回復',
            'product_status_id' => 3,
            'product_category_id' => 5,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ピーピーマックス',
            'price' => 0,
            'img' => 'storage/images/products/max_elixir.png',
            'description' => '各技のＰＰを全回復',
            'product_status_id' => 3,
            'product_category_id' => 5,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'スピーダー',
            'price' => 350,
            'img' => 'storage/images/products/x_speed.png',
            'description' => '戦闘中１人の素早さを上げる。',
            'product_status_id' => 2,
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'スペシャルアップ',
            'price' => 350,
            'img' => 'storage/images/products/x_sp_atk.png',
            'description' => '戦闘中１人の特攻を上げる。',
            'product_status_id' => 3,
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'プラスパワー',
            'price' => 500,
            'img' => 'storage/images/products/x_attack.png',
            'description' => '戦闘中１人の攻撃を上げる。',
            'product_status_id' => 3,
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ディフェンダー',
            'price' => 550,
            'img' => 'storage/images/products/x_defend.png',
            'description' => '戦闘中１人の防御を上げる。',
            'product_status_id' => 3,
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'クリティカッター',
            'price' => 650,
            'img' => 'storage/images/products/dire_hit.png',
            'description' => '戦闘中急所に当たりやすくなる。',
            'product_status_id' => 2,
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'エフェクトガード',
            'price' => 700,
            'img' => 'storage/images/products/guard_spec.png',
            'description' => '戦闘中能力を下げられない。',
            'product_status_id' => 3,
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ヨクアタール',
            'price' => 900,
            'img' => 'storage/images/products/x_accuracy.png',
            'description' => '戦闘中１人の命中率を上げる。',
            'product_status_id' => 2,
            'product_category_id' => 2,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'タウリン',
            'price' => 9800,
            'img' => 'storage/images/products/protein.png',
            'description' => '攻撃の最大値を上げる',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'プロムヘキシン',
            'price' => 9800,
            'img' => 'storage/images/products/iron.png',
            'description' => '防御の最大値を上げる',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'キトサン',
            'price' => 9800,
            'img' => 'storage/images/products/zinc.png',
            'description' => '特防の最大値を上げる',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'インドメタシン',
            'price' => 9800,
            'img' => 'storage/images/products/carbos.png',
            'description' => '素早さの最大値を上げる',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'リゾチウム',
            'price' => 9800,
            'img' => 'storage/images/products/calcium.png',
            'description' => '特攻の最大値を上げる',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ポイントアップ',
            'price' => 4900,
            'img' => 'storage/images/products/pp_up.png',
            'description' => '１つの技のＰＰを上げる',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'マックスアップ',
            'price' => 9800,
            'img' => 'storage/images/products/hp_up.png',
            'description' => 'ＨＰの最大値をあげる',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ポイントマックス',
            'price' => 4900,
            'img' => 'storage/images/products/pp_max.png',
            'description' => '一つの技のＰＰを最大値まであげる',
            'product_status_id' => 3,
            'product_category_id' => 4,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ふしぎなアメ',
            'price' => 0,
            'img' => 'storage/images/products/rare_candy.png',
            'description' => 'エネルギーのつまったアメ。与えるとにんげんの１ひきのレベルが１だけ上がる。',
            'product_status_id' => 2,
            'product_category_id' => 7,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'まがったスプーン',
            'price' => 0,
            'img' => 'storage/images/products/twisted_spoon.png',
            'description' => 'エスパータイプに持たせると？',
            'product_status_id' => 4,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ラッキーパンチ',
            'price' => 0,
            'img' => 'storage/images/products/lucky_punch.png',
            'description' => 'にんげんの攻撃力が上がる',
            'product_status_id' => 5,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かみなりのいし',
            'price' => 2100,
            'img' => 'storage/images/products/thunder_stone.png',
            'description' => 'ある特定のにんげんを進化させる不思議な石。いなずまの模様がある。',
            'product_status_id' => 5,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ほのおのいし',
            'price' => 2100,
            'img' => 'storage/images/products/fire_stone.png',
            'description' => 'ある特定のにんげんを進化させる不思議な石。橙色をしている。',
            'product_status_id' => 4,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'みずのいし',
            'price' => 2100,
            'img' => 'storage/images/products/water_stone.png',
            'description' => 'ある特定のにんげんを進化させる不思議な石。澄んだ青色をしている。',
            'product_status_id' => 4,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'リーフのいし',
            'price' => 2100,
            'img' => 'storage/images/products/leaf_stone.png',
            'description' => 'ある特定のにんげんを進化させるふしぎな石。葉っぱの模様がある。',
            'product_status_id' => 5,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'つきのいし',
            'price' => 0,
            'img' => 'storage/images/products/moon_stone.png',
            'description' => 'ある特定のにんげんを進化させるふしぎな石。',
            'product_status_id' => 4,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'たいようのいし',
            'price' => 0,
            'img' => 'storage/images/products/sun_stone.png',
            'description' => 'ある特定のにんげんを進化させるふしぎな石。',
            'product_status_id' => 5,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'きんのたま',
            'price' => 0,
            'img' => 'storage/images/products/nugget.png',
            'description' => 'キラキラと金色に光る純金製の玉。ショップで高く売れる。',
            'product_status_id' => 3,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'あなぬけのひも',
            'price' => 0,
            'img' => 'storage/images/products/escape_rope.png',
            'description' => '長くて丈夫な紐。洞窟やダンジョンから抜け出すことができる。',
            'product_status_id' => 1,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かわいいにんぎょう',
            'price' => 0,
            'img' => 'storage/images/products/pokè_doll.png',
            'description' => '敵の気を引いて野生のにんげんとの戦闘から必ず逃げられる。',
            'product_status_id' => 4,
            'product_category_id' => 8,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ほしのかけら',
            'price' => 0,
            'img' => 'storage/images/products/star_piece.png',
            'description' => 'キラキラと光る綺麗な宝石のかけら。高く売れる。',
            'product_status_id' => 5,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ほしのすな',
            'price' => 0,
            'img' => 'storage/images/products/stardust.png',
            'description' => '手触りがサラサラの赤くて綺麗な砂。高く売れる。',
            'product_status_id' => 5,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'しんじゅ',
            'price' => 0,
            'img' => 'storage/images/products/pearl.png',
            'description' => '綺麗な銀色に光る、少し小さめの真珠。ショップで高く売れる。',
            'product_status_id' => 5,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おおきなしんじゅ',
            'price' => 0,
            'img' => 'storage/images/products/big_pearl.png',
            'description' => '綺麗な銀色に光るかなり大粒の真珠。ショップで高く売れる。',
            'product_status_id' => 4,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'むしよけスプレー',
            'price' => 350,
            'img' => 'storage/images/products/repel.png',
            'description' => '１００歩進む間、弱い野生のにんげんが全く出てこなくなる。',
            'product_status_id' => 3,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'シルバースプレー',
            'price' => 500,
            'img' => 'storage/images/products/super_repel.png',
            'description' => '２００歩進む間、弱い野生のにんげんが全く出てこなくなる。',
            'product_status_id' => 3,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ゴールドスプレー',
            'price' => 700,
            'img' => 'storage/images/products/max_repel.png',
            'description' => '２５０歩進む間、弱い野生のにんげんが全く出てこなくなる。',
            'product_status_id' => 2,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'こだわりはちまき',
            'price' => 0,
            'img' => 'storage/images/products/choice_band.png',
            'description' => 'にんげんに持たせると、同じ技しか出せなくなるが威力が大きくなる。',
            'product_status_id' => 5,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ピントレンズ',
            'price' => 0,
            'img' => 'storage/images/products/scope_lens.png',
            'description' => '持たせると技が急所に当たりやすくなる。',
            'product_status_id' => 4,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'やすらぎのすず',
            'price' => 0,
            'img' => 'storage/images/products/soothe_bell.png',
            'description' => 'にんげんに持たせるとなつきやすくなる。',
            'product_status_id' => 2,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'きょうせいギブス',
            'price' => 0,
            'img' => 'storage/images/products/macho_brace.png',
            'description' => 'にんげんに持たせると、素早さが下がるが普通より強く育つ。',
            'product_status_id' => 1,
            'product_category_id' => 8,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'たべのこし',
            'price' => 0,
            'img' => 'storage/images/products/leftovers.png',
            'description' => '毎日必ず体力を少し回復する。',
            'product_status_id' => 1,
            'product_category_id' => 8,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'メタルコート',
            'price' => 0,
            'img' => 'storage/images/products/metal_coat.png',
            'description' => '持たせると鋼タイプの技の威力が上がる。',
            'product_status_id' => 1,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'メタルパウダー',
            'price' => 0,
            'img' => 'storage/images/products/metal_powder.png',
            'description' => '特定のにんげんの防御力を上げる効果がある。',
            'product_status_id' => 3,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'しあわせタマゴ',
            'price' => 0,
            'img' => 'storage/images/products/lucky_egg.png',
            'description' => '持たせると手に入る経験値が少し増える。',
            'product_status_id' => 4,
            'product_category_id' => 8,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ちいさなきのこ',
            'price' => 0,
            'img' => 'storage/images/products/tiny_mushroom.png',
            'description' => '小さめなめずらしいキノコ。一部のマニアで人気',
            'product_status_id' => 5,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おおきなきのこ',
            'price' => 0,
            'img' => 'storage/images/products/big_mushroom.png',
            'description' => '大きめなめずしいキノコ。一部のマニアで人気',
            'product_status_id' => 5,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => '竜のうろこ',
            'price' => 0,
            'img' => 'storage/images/products/dragon_scale.png',
            'description' => 'ある特定のにんげんに持たせて通信交換すると進化する。',
            'product_status_id' => 4,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'きよめのおふだ',
            'price' => 0,
            'img' => 'storage/images/products/cleanse_tag.png',
            'description' => '先頭のにんげんに持たせておくと野生のにんげんに遭遇しにくくなる。',
            'product_status_id' => 1,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'せんせいのツメ',
            'price' => 0,
            'img' => 'storage/images/products/quick_claw.png',
            'description' => '持たせると相手より先に行動できることがある。',
            'product_status_id' => 2,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かいがらのすず',
            'price' => 0,
            'img' => 'storage/images/products/shell_bell.png',
            'description' => '持たせたにんげんが相手にダメージを与えたとき、体力が少し回復する。',
            'product_status_id' => 2,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おうじゃのしるし',
            'price' => 0,
            'img' => 'storage/images/products/kings_rock.png',
            'description' => 'ある特定のにんげんを進化させるのに必要。',
            'product_status_id' => 3,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かわらずのいし',
            'price' => 0,
            'img' => 'storage/images/products/everstone.png',
            'description' => 'にんげんに持たせている間、そのにんげんは進化しなくなる。',
            'product_status_id' => 4,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'アップグレード',
            'price' => 0,
            'img' => 'storage/images/products/up_grade.png',
            'description' => 'いろんな情報が詰まった透明な機械、特定のにんげんを進化させるのに必要',
            'product_status_id' => 3,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'がくしゅうそうち',
            'price' => 0,
            'img' => 'storage/images/products/exp_share.png',
            'description' => '持たせていると戦闘にでていないにんげんも経験値をわけてもらえる。',
            'product_status_id' => 2,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おまもりこばん',
            'price' => 0,
            'img' => 'storage/images/products/amulet_coin.png',
            'description' => '持たせた人にんげんが戦闘に参加すると賞金がいつもの２倍もらえる',
            'product_status_id' => 4,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'タウンマップ',
            'price' => 0,
            'img' => 'storage/images/products/town_map.png',
            'description' => '手軽に見ることができる便利な地図。自分の場所もわかる',
            'product_status_id' => 1,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ポケモンのふえ',
            'price' => 0,
            'img' => 'storage/images/products/poke_flute.png',
            'description' => '吹けばどんなにんげんも飛び起きるという笛、綺麗な音色を奏でる。',
            'product_status_id' => 1,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'じてんしゃ',
            'price' => 0,
            'img' => 'storage/images/products/dawn_bike.png',
            'description' => 'ランニングシューズより速く走ることができる折りたたみの自転車',
            'product_status_id' => 3,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ボロのつりざお',
            'price' => 0,
            'img' => 'storage/images/products/old_rod.png',
            'description' => '古くてボロい釣り竿。水のある場所で使うとにんげんが釣れる。',
            'product_status_id' => 3,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'いいつりざお',
            'price' => 0,
            'img' => 'storage/images/products/good_rod.png',
            'description' => '新しくていい釣り竿。水のある場所で使うとにんげんが釣れる。',
            'product_status_id' => 2,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'すごいつりざお',
            'price' => 0,
            'img' => 'storage/images/products/super_rod.png',
            'description' => '最新のすごい釣り竿。水のある場所で使うとにんげんが釣れる。',
            'product_status_id' => 1,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'コインケース',
            'price' => 0,
            'img' => 'storage/images/products/coin_case.png',
            'description' => 'ゲームコーナーで手に入れたコインを９９９９枚まで入れることができるケース。',
            'product_status_id' => 5,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ダウジングマシン',
            'price' => 0,
            'img' => 'storage/images/products/dowsing_mchn.png',
            'description' => '使ったときに近くに見えない道具があれば反応して教えてくれる。',
            'product_status_id' => 5,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'おしえテレビ',
            'price' => 0,
            'description' => '初心者のトレーナーに役に立つ番組を見ることができるテレビ。',
            'product_status_id' => 1,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ランニングシューズ',
            'price' => 0,
            'description' => '',
            'product_status_id' => 5,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ボイステェッカー',
            'price' => 0,
            'description' => '有名な人物について、見たり聞いたりしたことを見直すことができる。',
            'product_status_id' => 5,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'バトルサ－チャー',
            'price' => 0,
            'img' => 'storage/images/products/vs_recorder.png',
            'description' => '戦いたいトレーナーを教えてくれる機会。歩くと電池がたまる。',
            'product_status_id' => 4,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'きのみぶくろ',
            'price' => 0,
            'description' => '木の実を入れる袋。',
            'product_status_id' => 1,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);


        Product::create([
            'name' => 'きんのいれば',
            'price' => 0,
            'description' => '秘伝マシン４と交換できる。',
            'product_status_id' => 1,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ひきかえけん',
            'price' => 0,
            'description' => '自転車と交換できる',
            'product_status_id' => 1,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);


        Product::create([
            'name' => 'ふねのチケット',
            'price' => 0,
            'description' => '船に乗れる',
            'product_status_id' => 1,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'シルフスコープ',
            'price' => 0,
            'description' => '人の目に見えないものを見ることができるスコープ。シルフカンパニー製',
            'product_status_id' => 6,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ルビー',
            'price' => 0,
            'description' => '',
            'product_status_id' => 7,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'サファイア',
            'price' => 0,
            'description' => '',
            'product_status_id' => 7,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'かいのかせき',
            'price' => 0,
            'img' => 'storage/images/products/helix_fossil.png',
            'description' => 'オムライスをＧＥＴするのに必要',
            'product_status_id' => 6,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'こうらのかせき',
            'price' => 0,
            'img' => 'storage/images/products/done_fossil.png',
            'description' => 'カブトムシをＧＥＴするのに必要',
            'product_status_id' => 7,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        Product::create([
            'name' => 'ひみつのこはく',
            'price' => 0,
            'img' => 'storage/images/products/old_amber.png',
            'description' => 'テンプラをＧＥＴするのに必要',
            'product_status_id' => 6,
            'product_category_id' => 11,
            'user_id' => 3,
        ]);

        //ここから冬の新作

        Product::create([
            'name' => 'もくたん',
            'price' => 0,
            'img' => 'storage/images/products/charcoal.png',
            'description' => '炎タイプのにんげんのすはやさを2割マシにさせる',
            'product_status_id' => 3,
            'product_category_id' => 8,
            'user_id' => 3,
        ]);
        Product::create([
            'name' => '竜の牙',
            'price' => 0,
            'img' => 'storage/images/products/dragon_fang.png',
            'description' => 'ドラゴンタイプのにんげんの素早さを2割増しにする',
            'product_status_id' => 5,
            'product_category_id' => 8,
            'user_id' => 3,
        ]);
        Product::create([
            'name' => 'ながねぎ',
            'price' => 100,
            'img' => 'storage/images/products/stick.png',
            'description' => '持つと、攻撃する際その攻撃が急所に当たる確率が2倍になる。',
            'product_status_id' => 3,
            'product_category_id' => 10,
            'user_id' => 3,
        ]);
        Product::create([
            'name' => '弱点保険',
            'price' => 0,
            'img' =>'storage/images/products/weakness_policy.png',
            'description' => '持たせると弱点を突かれた時に[こうげき][とくこう]が倍になる。効果を発揮すると無くなる。',
            'product_status_id' => 3,
            'product_category_id' => 9,
            'user_id' => 3,
        ]);


    }
}

//Product::create([
//    'name' => '',
//    'price' => ,
//    'img' => '',
//    'description' => '',
//    'product_status_id' => 0,
//    'product_category_id' => 0,
//    'user_id' => 3,
//]);