<?php

use Illuminate\Database\Seeder;

class MinutesDetailsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('minutes_details')->truncate();

        // `internal_manager`.`minutes_details`
        $minutes_details = array(
            array('minutes_detail_id' => '4', 'minutes_group_id' => '1013', 'minutes_detail_text' => '<p>あああ</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p><span style="background-color:#2980b9">sっっっd</span></p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p><u>fだfdさ</u></p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '', 'minutes_detail_date' => '2017-07-10 19:36:00', 'created_at' => '2017-07-10 10:36:42', 'updated_at' => '2017-07-10 10:36:42'),
            array('minutes_detail_id' => '5', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p>aa</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '', 'minutes_detail_date' => '2017-07-22 15:21:00', 'created_at' => '2017-07-11 06:21:33', 'updated_at' => '2017-07-11 06:21:33'),
            array('minutes_detail_id' => '6', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p>dfsa</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p><span style="color:#2980b9">ふぁsdふぁs</span></p>

                <p>&nbsp;</p>

                <h2>fdさ</h2>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '', 'minutes_detail_date' => '2017-07-06 11:00:00', 'created_at' => '2017-07-11 06:25:15', 'updated_at' => '2017-07-11 06:25:15'),
            array('minutes_detail_id' => '7', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p>Laravelのセッションのバックエンドにドライバーを追加したい場合、<code>Session</code><a href="https://readouble.com/laravel/5.1/ja/facades.html">ファサード</a>の<code>extend</code>メソッドを使用します。<a href="https://readouble.com/laravel/5.1/ja/providers.html">サービスプロバイダー</a>の<code>boot</code>メソッドから<code>extend</code>メソッドを呼び出してください。</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-05 15:47:00', 'created_at' => '2017-07-11 06:47:32', 'updated_at' => '2017-07-11 06:47:32'),
            array('minutes_detail_id' => '8', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p>さて、、日付を出力する際に、色々と試行錯誤してしまったため、情報共有できればと思い始めて書きました！</p>

                <p>例えばDBから抽出したものをそのまま表示しようとすると、</p>

                <blockquote>
                <p>YYYY-MM-DD<br />
                YYYY-MM-DD HH:ii:ss</p>
                </blockquote>

                <p>といった感じで出てしまうため、blade内では例えば</p>

                <pre>
                {!! date(&#39;Y/m/d&#39;, strtotime($user-&gt;date) !!}
                </pre>

                <p>といった記述が必要になるかと思います。<br />
                しかし、特に問題になったのが「曜日」の表示。<br />
                それを要件に出された時、一瞬頭が白くなりましたｗ</p>

                <p>smartyには慣れていたので、どうにかしてbladeも拡張できないものかと。</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2000000', 'minutes_detail_date' => '2017-07-28 15:50:00', 'created_at' => '2017-07-11 06:50:21', 'updated_at' => '2017-07-11 06:50:21'),
            array('minutes_detail_id' => '9', 'minutes_group_id' => '1013', 'minutes_detail_text' => '<p>あああ</p>

                <p>&nbsp;</p>

                <h1><span style="color:#2980b9">あfdさfsだ</span></h1>

                <h1>&nbsp;</h1>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>fdさfs</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-07 16:03:00', 'created_at' => '2017-07-11 07:03:47', 'updated_at' => '2017-07-11 07:03:47'),
            array('minutes_detail_id' => '10', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p>で</p>

                <blockquote>
                <p>YYYY/MM/DD(曜日)</p>
                </blockquote>

                <p>と出力することが出来ます。</p>

                <p>注意として、コンパイルされたファイルを一旦削除する必要があります。</p>

                <pre>
                <span style="background-color:#3498db">php artisan clear-compiled
                </span></pre>

                <p>もしくは</p>

                <pre>
                storage/framework/views/ 内のファイルを削除
                </pre>

                <p>応用すれば日付の出力フォーマットを固定することも出来ると思います。<br />
                参考になればと思います。</p>

                <p>また、こうした方がいいんじゃない？とかのアドバイスなどもあれば是非お願いします！</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-11 16:23:00', 'created_at' => '2017-07-11 07:23:49', 'updated_at' => '2017-07-11 07:23:49'),
            array('minutes_detail_id' => '11', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p><span style="color:#9b59b6"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">あああ</span></span></p>

                <p>&nbsp;</p>

                <p>fdさfさ</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>fdさ</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-12 11:06:00', 'created_at' => '2017-07-12 02:07:03', 'updated_at' => '2017-07-12 02:07:03'),
            array('minutes_detail_id' => '12', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p>ああ</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <h1>dfさfdさ</h1>

                <h1>&nbsp;</h1>

                <p>&nbsp;</p>

                <p>dふぁsdさ</p>

                <p>&nbsp;</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-07 11:07:00', 'created_at' => '2017-07-12 02:07:27', 'updated_at' => '2017-07-12 02:07:27'),
            array('minutes_detail_id' => '13', 'minutes_group_id' => '1014', 'minutes_detail_text' => '<p><span style="color:#9b59b6">山ちゃんが検診でひっかかった</span></p>

                <p>進藤が検診でひかかった</p>

                <p>&nbsp;</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-12 13:26:00', 'created_at' => '2017-07-12 04:27:32', 'updated_at' => '2017-07-12 04:27:32'),
            array('minutes_detail_id' => '14', 'minutes_group_id' => '1014', 'minutes_detail_text' => '<p>あああ</p>

                <p>&nbsp;</p>

                <p>fdさfsd</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>fdさfds</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-12 19:00:00', 'created_at' => '2017-07-12 10:04:20', 'updated_at' => '2017-07-12 10:04:20'),
            array('minutes_detail_id' => '15', 'minutes_group_id' => '1014', 'minutes_detail_text' => '<h2>Blade拡張</h2>

                <p>Bladeでは自分のカスタムディレクティブも定義することができます。<code>directive</code>メソッドを使い、ディレクティブを登録します。Bladeコンパイラーがそのディレクティブを見つけると、引数に指定したコールバックが呼びだされます。</p>

                <p>次の例は<code>@datetime($var)</code>ディレクティブを作成し、渡された<code>$var</code>をフォーマットします。</p>

                <pre>

                &nbsp;</pre>

                <p>&nbsp;</p>

                <p>ご覧の通り、このディレクティブではLaravelの<code>with</code>ヘルパ関数が使われています。<code>with</code>ヘルパはシンプルに指定されたオブジェクト／値を返します。メソッドチェーンを行うのに便利です。このディレクティブにより最終的に生成されるコードは、次の通りです。</p>

                <p>&nbsp;</p>

                <p>ご覧の通り、このディレクティブではLaravelの<code>with</code>ヘルパ関数が使われています。<code>with</code>ヘルパはシンプルに指定されたオブジェクト／値を返します。メソッドチェーンを行うのに便利です。このディレクティブにより最終的に生成されるコードは、次の通りです。</p>

                <p>&nbsp;</p>

                <h2>Blade拡張</h2>

                <p>Bladeでは自分のカスタムディレクティブも定義することができます。<code>directive</code>メソッドを使い、ディレクティブを登録します。Bladeコンパイラーがそのディレクティブを見つけると、引数に指定したコールバックが呼びだされます。</p>

                <p>次の例は<code>@datetime($var)</code>ディレクティブを作成し、渡された<code>$var</code>をフォーマットします。</p>

                <pre>

                &nbsp;</pre>

                <p>&nbsp;</p>

                <p>ご覧の通り、このディレクティブではLaravelの<code>with</code>ヘルパ関数が使われています。<code>with</code>ヘルパはシンプルに指定されたオブジェクト／値を返します。メソッドチェーンを行うのに便利です。このディレクティブにより最終的に生成されるコードは、次の通りです。</p>

                <p>&nbsp;</p>

                <p>ご覧の通り、このディレクティブではLaravelの<code>with</code>ヘルパ関数が使われています。<code>with</code>ヘルパはシンプルに指定されたオブジェクト／値を返します。メソッドチェーンを行うのに便利です。このディレクティブにより最終的に生成されるコードは、次の通りです。</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-13 13:38:00', 'created_at' => '2017-07-13 04:39:46', 'updated_at' => '2017-07-13 04:39:46'),
            array('minutes_detail_id' => '16', 'minutes_group_id' => '1014', 'minutes_detail_text' => '<p>おおおお</p>

                <p>&nbsp;</p>

                <p>fだfdさあdsf</p>

                <p>&nbsp;</p>

                <p>fdさsd</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-13 14:32:00', 'created_at' => '2017-07-13 05:33:19', 'updated_at' => '2017-07-13 05:33:19'),
            array('minutes_detail_id' => '17', 'minutes_group_id' => '1015', 'minutes_detail_text' => '<p>みんなでやればいいと思う。</p>

                <p>誰か担当者を決めないとぐずぐずになる。</p>

                <p>&nbsp;</p>

                <p>でもみんなやりたがらない。</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => 'sdafasd

                fdsafsda', 'user_id' => '315', 'minutes_detail_date' => '2017-07-13 11:22:00', 'created_at' => '2017-07-14 02:23:57', 'updated_at' => '2017-07-19 08:04:08'),
            array('minutes_detail_id' => '18', 'minutes_group_id' => '11', 'minutes_detail_text' => '<p>fddsa</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-13 11:39:00', 'created_at' => '2017-07-14 02:40:01', 'updated_at' => '2017-07-14 02:40:01'),
            array('minutes_detail_id' => '19', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p><span style="font-size:20px"><span style="background-color:#f1c40f">あああ</span></span></p>

                <p>&nbsp;</p>

                <p>fdさfsだ</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>fdさs</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-12 11:40:00', 'created_at' => '2017-07-14 02:41:31', 'updated_at' => '2017-07-14 02:41:31'),
            array('minutes_detail_id' => '20', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p>fdsafsd</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-08 11:50:00', 'created_at' => '2017-07-14 02:50:10', 'updated_at' => '2017-07-14 02:50:10'),
            array('minutes_detail_id' => '21', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p>sfds</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-29 11:50:00', 'created_at' => '2017-07-14 02:50:29', 'updated_at' => '2017-07-19 03:33:54'),
            array('minutes_detail_id' => '22', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p>dsafdsafdas</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-14 12:15:00', 'created_at' => '2017-07-14 03:15:31', 'updated_at' => '2017-07-14 03:15:31'),
            array('minutes_detail_id' => '23', 'minutes_group_id' => '1012', 'minutes_detail_text' => '<p>dsafdsafdas</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-14 12:15:00', 'created_at' => '2017-07-14 03:17:39', 'updated_at' => '2017-07-14 03:17:39'),
            array('minutes_detail_id' => '24', 'minutes_group_id' => '6', 'minutes_detail_text' => '<p>dふぁs</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-14 12:18:00', 'created_at' => '2017-07-14 03:18:48', 'updated_at' => '2017-07-14 03:18:48'),
            array('minutes_detail_id' => '25', 'minutes_group_id' => '1014', 'minutes_detail_text' => '<h1>どういうことだ</h1>

                <p>ちょっと例を添えて説明</p>

                <p>下記2例のように<br />
                データを保存をすることがあるかと思う</p>

                <p>update()を使った場合</p>

                <pre>
                App\\Flight::where(&#39;id&#39;, 1)
                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);
                </pre>

                <p>save()を使った場合</p>

                <pre>
                $flight = App\\Flight::find(1)
                $flight-&gt;name = $request-&gt;name;
                $flight-&gt;save();
                </pre>

                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>

                <h3><code>save()</code></h3>

                <p>updated_atのカラムが更新されない</p>

                <h3><code>update()</code></h3>

                <p>updated_atのカラムが更新される</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-21 12:31:00', 'created_at' => '2017-07-14 03:31:25', 'updated_at' => '2017-07-18 04:57:51'),
            array('minutes_detail_id' => '26', 'minutes_group_id' => '25', 'minutes_detail_text' => '<h1>どういうことだ</h1>

                <p>ちょっと例を添えて説明</p>

                <p>下記2例のように<br />
                データを保存をすることがあるかと思う</p>

                <p>update()を使った場合</p>

                <pre>
                App\\Flight::where(&#39;id&#39;, 1)
                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);
                </pre>

                <p>save()を使った場合</p>

                <pre>
                $flight = App\\Flight::find(1)
                $flight-&gt;name = $request-&gt;name;
                $flight-&gt;save();
                </pre>

                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>

                <h3><code>save()</code></h3>

                <p>updated_atのカラムが更新されない</p>

                <h3><code>update()</code></h3>

                <p>updated_atのカラムが更新される</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-14 12:31:00', 'created_at' => '2017-07-18 04:33:57', 'updated_at' => '2017-07-18 04:33:57'),
            array('minutes_detail_id' => '27', 'minutes_group_id' => '25', 'minutes_detail_text' => '<h1>どういうことだ</h1>

                <p>ちょっと例を添えて説明</p>

                <p>下記2例のように<br />
                データを保存をすることがあるかと思う</p>

                <p>update()を使った場合</p>

                <pre>
                App\\Flight::where(&#39;id&#39;, 1)
                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);
                </pre>

                <p>save()を使った場合</p>

                <pre>
                $flight = App\\Flight::find(1)
                $flight-&gt;name = $request-&gt;name;
                $flight-&gt;save();
                </pre>

                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>

                <h3><code>save()</code></h3>

                <p>updated_atのカラムが更新されない</p>

                <h3><code>update()</code></h3>

                <p>updated_atのカラムが更新される</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-14 12:31:00', 'created_at' => '2017-07-18 04:34:33', 'updated_at' => '2017-07-18 04:34:33'),
            array('minutes_detail_id' => '28', 'minutes_group_id' => '25', 'minutes_detail_text' => '<h1>どういうことだ</h1>

                <p>ちょっと例を添えて説明</p>

                <p>下記2例のように<br />
                データを保存をすることがあるかと思う</p>

                <p>update()を使った場合</p>

                <pre>
                App\\Flight::where(&#39;id&#39;, 1)
                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);
                </pre>

                <p>save()を使った場合</p>

                <pre>
                $flight = App\\Flight::find(1)
                $flight-&gt;name = $request-&gt;name;
                $flight-&gt;save();
                </pre>

                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>

                <h3><code>save()</code></h3>

                <p>updated_atのカラムが更新されない</p>

                <h3><code>update()</code></h3>

                <p>updated_atのカラムが更新される</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-14 12:31:00', 'created_at' => '2017-07-18 04:41:44', 'updated_at' => '2017-07-18 04:41:44'),
            array('minutes_detail_id' => '29', 'minutes_group_id' => '25', 'minutes_detail_text' => '<h1>どういうことだ</h1>

                <p>ちょっと例を添えて説明</p>

                <p>下記2例のように<br />
                データを保存をすることがあるかと思う</p>

                <p>update()を使った場合</p>

                <pre>
                App\\Flight::where(&#39;id&#39;, 1)
                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);
                </pre>

                <p>save()を使った場合</p>

                <pre>
                $flight = App\\Flight::find(1)
                $flight-&gt;name = $request-&gt;name;
                $flight-&gt;save();
                </pre>

                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>

                <h3><code>save()</code></h3>

                <p>updated_atのカラムが更新されない</p>

                <h3><code>update()</code></h3>

                <p>updated_atのカラムが更新される</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-14 12:31:00', 'created_at' => '2017-07-18 04:44:54', 'updated_at' => '2017-07-18 04:44:54'),
            array('minutes_detail_id' => '30', 'minutes_group_id' => '25', 'minutes_detail_text' => '<h1>どういうことだ</h1>

                <p>ちょっと例を添えて説明</p>

                <p>下記2例のように<br />
                データを保存をすることがあるかと思う</p>

                <p>update()を使った場合</p>

                <pre>
                App\\Flight::where(&#39;id&#39;, 1)
                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);
                </pre>

                <p>save()を使った場合</p>

                <pre>
                $flight = App\\Flight::find(1)
                $flight-&gt;name = $request-&gt;name;
                $flight-&gt;save();
                </pre>

                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>

                <h3><code>save()</code></h3>

                <p>updated_atのカラムが更新されない</p>

                <h3><code>update()</code></h3>

                <p>updated_atのカラムが更新される</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-14 12:31:00', 'created_at' => '2017-07-18 04:46:49', 'updated_at' => '2017-07-18 04:46:49'),
            array('minutes_detail_id' => '31', 'minutes_group_id' => '25', 'minutes_detail_text' => '<h1>どういうことだ</h1>

                <p>ちょっと例を添えて説明</p>

                <p>下記2例のように<br />
                データを保存をすることがあるかと思う</p>

                <p>update()を使った場合</p>

                <pre>
                App\\Flight::where(&#39;id&#39;, 1)
                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);
                </pre>

                <p>save()を使った場合</p>

                <pre>
                $flight = App\\Flight::find(1)
                $flight-&gt;name = $request-&gt;name;
                $flight-&gt;save();
                </pre>

                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>

                <h3><code>save()</code></h3>

                <p>updated_atのカラムが更新されない</p>

                <h3><code>update()</code></h3>

                <p>updated_atのカラムが更新される</p>
                ', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-14 12:31:00', 'created_at' => '2017-07-18 04:50:10', 'updated_at' => '2017-07-18 04:50:10'),
            array('minutes_detail_id' => '32', 'minutes_group_id' => '0', 'minutes_detail_text' => '', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '', 'minutes_detail_date' => '0000-00-00 00:00:00', 'created_at' => '2017-07-18 04:50:36', 'updated_at' => '2017-07-18 04:50:36'),
            array('minutes_detail_id' => '33', 'minutes_group_id' => '0', 'minutes_detail_text' => '', 'minutes_detail_user_name' => '', 'minutes_detail_agenda' => '', 'user_id' => '', 'minutes_detail_date' => '0000-00-00 00:00:00', 'created_at' => '2017-07-18 04:50:42', 'updated_at' => '2017-07-18 04:50:42'),
            array('minutes_detail_id' => '37', 'minutes_group_id' => '1018', 'minutes_detail_text' => '<p>10年以上金融機関で働いているインフラエンジニアの落ちないサーバにするための考察です。<br />
                ハードウェアの専門家ではないので、正確ではないかもしれません。<br />
                今までの経験からの個人的考え方になります。</p>

                <p><strong>私たちオンプレ重視のインフラエンジニアは、<br />
                クラウドサービスではできない高可用性サーバを導入したり、<br />
                複数台構成で１台故障しても問題ない構成のサーバはコスト重視するなど、<br />
                システムに最適なサーバを導入しようとしています。</strong></p>

                <h1>高可用性サーバを追求する目的</h1>

                <p><strong>■アプリに影響を与えないように</strong><br />
                Active/Standby構成にしていて、インフラ的にはダウンタイムが数秒だとしても、<br />
                アプリによっては復旧に時間がかかったり、問題ないことの確認にも時間がかかってしまいます。</p>

                <p>また、正しくサーバが落ちればアプリが問題ないとしても、<br />
                サーバが中途半端な状態のままになってしまい、なんだかおかしいということもあります。</p>

                <p>私たちインフラエンジニアは、できる限り落ちないサーバにすることによって、<br />
                アプリが問題なく動くようにしたいと考えています。</p>

                <p><strong>■仮想化で１ホストで複数ゲストを動かすため</strong><br />
                最近は1サーバ(1筐体)ではCPUやメモリーやディスクを使えきれないほど高性能化しており、<br />
                コストを抑えるためにも仮想化していく必要がありますが、<br />
                サーバ(ホストOS)が停止すると、多くのゲストOSも停止してしまいますので、<br />
                できる限り高可用性サーバを使いサーバが落ちることがないようにしたいと考えています。</p>

                <h1>ハードウェア故障箇所ランキング</h1>

                <p>ハードウェアの故障箇所のランキングを作成してみました。<br />
                このランキングは、某自営保守を行っている販売代理店の人の情報を参考にしています。</p>

                <table>
                        <thead>
                                <tr>
                                        <th>Ranking</th>
                                        <th>故障個所</th>
                                        <th>影響</th>
                                        <th>備考</th>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>
                                        <td>No.1</td>
                                        <td>HDD</td>
                                        <td>なし</td>
                                        <td>RAIDで、故障時も影響なし</td>
                                </tr>
                                <tr>
                                        <td>No.2</td>
                                        <td>FAN</td>
                                        <td>なし</td>
                                        <td>複数FANが搭載されているため、影響なし</td>
                                </tr>
                                <tr>
                                        <td>No.3</td>
                                        <td>電源</td>
                                        <td>なし</td>
                                        <td>冗長構成できるため問題なし</td>
                                </tr>
                                <tr>
                                        <td>No.4</td>
                                        <td>メモリー</td>
                                        <td>なし・大</td>
                                        <td>エラーチェックによる故障検知だけだと問題なし。<br />
                                        メモリー故障によりOS停止の経験あり。</td>
                                </tr>
                                <tr>
                                        <td>No.5</td>
                                        <td>バッテリーキャッシュ</td>
                                        <td>小</td>
                                        <td>キャッシュ故障だけなら、OS停止しない。<br />
                                        書き込みが遅くなる。</td>
                                </tr>
                                <tr>
                                        <td>No.6</td>
                                        <td>アレイコントローラ</td>
                                        <td>大</td>
                                        <td>ファームの不具合の経験あり。<br />
                                        OSが停止してしまう。read onlyになってしまいログインできないが動き続けていることもあります。</td>
                                </tr>
                                <tr>
                                        <td>No.7</td>
                                        <td>システムボード</td>
                                        <td>大</td>
                                        <td>BIOSの画面も見れなくなってしまう障害です。<br />
                                        何度か経験はあります。</td>
                                </tr>
                                <tr>
                                        <td>No.8</td>
                                        <td>CPU</td>
                                        <td>大</td>
                                        <td>OSが停止してしまう。&nbsp;<br />
                                        めったに故障しない</td>
                                </tr>
                                <tr>
                                        <td>ランク外</td>
                                        <td>NIC</td>
                                        <td>大</td>
                                        <td>NICドライバーがおかいいことによる疎通不可の経験あり。<br />
                                        OSは停止しないが、OS再起動の必要あり。</td>
                                </tr>
                        </tbody>
                </table>

                <p>このランキングを作って思ったことは、<br />
                よくあるような多くのハードウェア故障は影響がないということです。<br />
                もっとも多いHDD故障でもほとんどないということです。<br />
                まして、OSが停止してしまうような大きなハードウェア故障は、発生頻度が少ないということです。</p>

                <h1>ハードウェア故障原因、サーバ停止原因</h1>

                <p>今までの経験からハードウェア故障とサーバ停止原因を整理してみたいと思います。</p>

                <h2>ハードの物理的故障</h2>

                <p>物理的故障は時々あります。<br />
                OSが停止してしまうような大きなハードウェア故障は、発生頻度が少ないです。<br />
                <strong>私の経験では、OSが停止してしまう物理的ハードウェア故障は、500物理サーバあって、年1台あるかないかくらいです。</strong></p>

                <h2>ファームウェアのバグ</h2>

                <p>ファームウェアは以下のハードの中にあるプログラムです。</p>

                <ul>
                        <li>アレイコントローラ
                        <ul>
                                <li>バグの例：アレイコントローラXXXで、まれなケースで 0x13 コードを出力し、システムがハングすることがある</li>
                                <li>バグの例：アレイコントローラXXXで、メモリのエラーによって POST コード 0x13 を出力してコントローラがロックアップする可能性がある</li>
                        </ul>
                        </li>
                        <li>ファイバーチャネル</li>
                        <li>NIC</li>
                        <li>システムROM(BIOS、UEFI)
                        <ul>
                                <li>バグの例：BIOSXXXで、iLO4 FW vx.xx を使用している場合、SmartStorageBattery が誤検知され、サーバーがハングすることがある</li>
                                <li>パフォーマンスを重視するような設定に変えられます</li>
                                <li><strong>ハードを制御できるということは、設定によりハードが問題になることも考えられます。<br />
                                多くの人が使っているデフォルト設定のままの方がいいのかもしれません。</strong></li>
                        </ul>
                        </li>
                        <li>管理ツール(例 HPE ilo)
                        <ul>
                                <li>バグの例：iLO FWvX.XXで、NVDIMM 非搭載構成で SmartStorageBattery 故障時に SMI が過剰に発生し、サーバーがハングすることがある</li>
                        </ul>
                        </li>
                </ul>

                <p>OSを入れ替えても、ファームウェアはかわりません。<br />
                故障で、ハードウェアを交換するとファームウェアのバージョンも変わります。<br />
                <strong>ベンダーは、問題があり問い合わせると、ファームウェアが古いことが原因かもしれませんので、ファームウェアを最新にしてくださいと言ってきます。</strong><br />
                ハード故障といってもファームウェアが引き金になっていることもあります。</p>

                <h2>ドライバーのバグ</h2>

                <p>ドライバーは、OSにあるハードを制御しているプログラムです。<br />
                故障で、ハードウェアを交換しても、ドライバーのバージョンはかわりません。<br />
                ドライバーは、ハードベンダーとＯＳベンダーが出しているドライバーがあります。</p>

                <ul>
                        <li>アレイコントローラ</li>
                        <li>ファイバーチャネル</li>
                        <li>NIC
                        <ul>
                                <li>運用を開始してしばらくすると、NICドライバーの問題で疎通できなくなることがありました。</li>
                        </ul>
                        </li>
                </ul>

                <h2>OS、ハイパーバイザーのバグ</h2>

                <p>勝手にOS再起動したり、カーネルパニックになったり、ハングしたりもあります。</p>

                <p>どのログにも原因が書かれていなく原因不明となることもあります。<br />
                もしかしたらOS起動してから日数が経過したことが原因で、<br />
                １年毎に定期再起動が必要なのではないかという声もありますが、<br />
                実際は本当かどうかわかりません。</p>

                <h2>サーバ停止原因のまとめ</h2>

                <p><strong>物理的な故障なら、冗長化できているミッションクリティカルサーバにすることによって対応できますが、<br />
                ファームウェアやドライバーやOSのバグに関しては、<br />
                ミッションクリティカルサーバにしても発生する可能性があり、問題によってはサーバが停止してしまいます。</strong></p>

                <p>&nbsp;</p>

                <h1>ハードウェアを購入する時に確認したいこと</h1>

                <p>ハードウェアの故障個所と、その原因を整理したことにより、<br />
                問題となるファームウェア、ドライバーに対してどのように対応できるかが、<br />
                高可用性サーバの選定基準にするのがいいのではないかと考えます。<br />
                また、それ以外にもサーバを選定するうえでの判断材料がありますので、まとめたいと思います。</p>

                <p>■高可用性サーバにとって、ファームウェアで重要なこと</p>

                <ul>
                        <li><strong>サイトで調べる際に、ファームウェアのバグや最新バージョンがわかりやすいか</strong></li>
                        <li>サーバで使っているファームウェアのバージョン確認方法が楽であること</li>
                        <li>ファームウェアのバージョンアップ方法
                        <ul>
                                <li>Linux OSからファームのバージョンアップできるか？</li>
                                <li>リモートから一斉にBIOSや色々なファームのバージョンアップできるか？</li>
                                <li>OSがない状態でのファームのバージョンアップ方法</li>
                                <li>色々な箇所のバージョンアップが含まれるパッケージがあるか？</li>
                        </ul>
                        </li>
                        <li><strong>ファームウェアの切り戻しがしやすいか。</strong></li>
                </ul>

                <p>■高可用性サーバにとって、重要なこと</p>

                <ul>
                        <li>ハードウェアの故障の確認方法
                        <ul>
                                <li>概要などでエラーがわかるようになっているか。</li>
                        </ul>
                        </li>
                        <li>ハードウェア故障時にはメールを飛ばせるか。
                        <ul>
                                <li>一元管理できるか。</li>
                                <li><strong>メールが飛ばなかったり、その時にメールを見過ごしても、後からもハード故障が把握できるか</strong></li>
                        </ul>
                        </li>
                        <li>物理的にもLEDによりどこが故障しているかわかるか。</li>
                        <li>故障しているか確認するためのHW診断ができること
                        <ul>
                                <li>診断ツールがあることによって、この診断で問題なかったらそのままいきましょうと言える。</li>
                        </ul>
                        </li>
                        <li>ホットプラグで何を交換可能か（ディスク、FAN、電源など）</li>
                </ul>

                <p>■その他考慮すること</p>

                <ul>
                        <li>BIOSの設定方法
                        <ul>
                                <li>現在どのようなBIOS設定になっているかが、OS起動後でもわかるか？</li>
                        </ul>
                        </li>
                        <li>100Vか200Vか。高可用性サーバは200Vが多いです。</li>
                        <li>リモートからのコンソール操作のしやすさ。
                        <ul>
                                <li>ISOイメージのマウント方法</li>
                        </ul>
                        </li>
                        <li>密度。（何Ｕに何台入るか？）</li>
                        <li>ラッキングしやすいか。（ドライバー不要か）</li>
                </ul>

                <h1>各ベンダーが出しているミッションクリティカルサーバ</h1>

                <p>高可用性サーバを目指す選定基準を整理しましたが、<br />
                各ベンダーから一般的なx86サーバよりも、より高可用性を目指しているサーバがありますので、<br />
                どのようなものがあるのか、どのように高可用性を実現しているのかをまとめてみました。</p>

                <h2>IBM Power</h2>

                <p><a href="https://www.ibm.com/systems/jp-ja/power/index.html" rel="nofollow noopener" target="_blank">https://www.ibm.com/systems/jp-ja/power/index.html</a></p>

                <ul>
                        <li>高速なPOWERプロセッサー搭載。GoogleもPower プロセッサーを採用</li>
                        <li>2Uサーバの小さなサーバがある</li>
                        <li>AIX, Red Hat、SUSE、Ubuntu
                        <ul>
                                <li>商用OSではない、Ubuntuサポートを打ち出している。</li>
                        </ul>
                        </li>
                        <li>CPUやメモリーが故障してもOS停止しない工夫。</li>
                        <li>1コアあたり8スレッドまで設定可能
                        <ul>
                                <li>1ソケット12コアのマシンであれば、最大で96コアにできる。</li>
                                <li>スレッド数は、1 or 2 or 4 or 8 で、アプリケーションにあった最適なスレッド数を変更可能</li>
                        </ul>
                        </li>
                </ul>

                <p>■気になること</p>

                <ul>
                        <li>Power CPUのため、Power CPU用のOS、アプリを入れる必要がある。</li>
                        <li>Power CPUのため、商用ミドルウェアが動かないこと、保証対象外になることがある。</li>
                </ul>

                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/38501976-533f-4819-ff34-7917d8765ced.png" rel="nofollow noopener" target="_blank"><img alt="Power.png" src="https://qiita-image-store.s3.amazonaws.com/0/156368/38501976-533f-4819-ff34-7917d8765ced.png" /></a></p>

                <h2>HPE Superdome X</h2>

                <p><a href="https://www.hpe.com/jp/ja/servers/superdome.html" rel="nofollow noopener" target="_blank">https://www.hpe.com/jp/ja/servers/superdome.html</a></p>

                <ul>
                        <li>シングルシステムで99.999%の高可用性が得られます</li>
                        <li>他のx86プラットフォームと比較して、20倍優れた信頼性を備え、ダウンタイムを60%低減</li>
                        <li>クリティカルなLinuxおよびWindowsのワークロードに最適なプラットフォーム</li>
                        <li>Linux、Windows、およびVMware</li>
                        <li>OS と連携したメモリや CPU コアの復旧や I/O エラーの封じ込めを実現。復旧が困難と判断した場合には故障したコンポーネント（ CPU ／メモリ／ブレード）を自動で切り離すこともできます</li>
                </ul>

                <p>■気になること</p>

                <ul>
                        <li>エンクロージャー型で導入コストが大きい。</li>
                        <li>リプレースの時にもエンクロージャーを購入する必要がある。</li>
                </ul>

                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/f66fb200-8889-b36e-ca02-9a1d8b9c3b60.png" rel="nofollow noopener" target="_blank"><img alt="SuperdomeX.png" src="https://qiita-image-store.s3.amazonaws.com/0/156368/f66fb200-8889-b36e-ca02-9a1d8b9c3b60.png" /></a></p>

                <h2>Fujitsu PRIMEQUEST</h2>

                <p><a href="http://www.fujitsu.com/jp/products/computing/servers/primequest/" rel="nofollow noopener" target="_blank">http://www.fujitsu.com/jp/products/computing/servers/primequest/</a></p>

                <blockquote>
                <p>インテル Xeonプロセッサーをはじめ、 Windows Server、Linux といった業界標準のオープン・アーキテクチャーをベースに、 富士通がメインフレームで培ったノウハウ、テクノロジーを結集したオープン・ミッションクリティカルサーバ</p>
                </blockquote>

                <ul>
                        <li>Linux/Windows対応</li>
                        <li>内部コンポーネントを徹底的に冗長化</li>
                        <li>ソフトウェア側の配慮を必要としないハードウェアによる高可用テクノロジー</li>
                        <li>最長10年の長期保守が可能です。</li>
                </ul>

                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/7e053b5d-03f9-950d-4d36-32cd8f4cad66.png" rel="nofollow noopener" target="_blank"><img alt="PRIMEQUEST.png" src="https://qiita-image-store.s3.amazonaws.com/0/156368/7e053b5d-03f9-950d-4d36-32cd8f4cad66.png" /></a></p>

                <h2>Strutas FT Server</h2>

                <p><a href="https://www.stratus.co.jp/products/ftserver/" rel="nofollow noopener" target="_blank">https://www.stratus.co.jp/products/ftserver/</a></p>

                <blockquote>
                <p>ストラタステクノロジーが30年以上にわたり培ってきた独自のアーキテクチャによる連続可用性技術が、ダウンタイムによる高額な損失コストの発生を回避し、お客様に「無停止の安心」をお届けします。</p>
                </blockquote>

                <ul>
                        <li>ストラタスのftServerのコンポーネント（CPU、メモリ、チップセット、ディスク、PCI、電源、ファン等）は全てハードウェアレベルで冗長化</li>
                        <li>各種デバイスドライバを一から検証し、強化</li>
                        <li>Windows／Red Hat／VMware 搭載の無停止型IAサーバ</li>
                </ul>

                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/c3b63aa3-f597-5227-18cb-122e9cfc29df.png" rel="nofollow noopener" target="_blank"><img alt="日本ストラタステクノロジー.png" src="https://qiita-image-store.s3.amazonaws.com/0/156368/c3b63aa3-f597-5227-18cb-122e9cfc29df.png" /></a></p>

                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/da175e49-299e-e224-43ac-275d1349a6ea.png" rel="nofollow noopener" target="_blank"><img src="https://qiita-image-store.s3.amazonaws.com/0/156368/da175e49-299e-e224-43ac-275d1349a6ea.png" style="width:250px" /></a></p>

                <h2>NEC ftサーバ Express5800</h2>

                <p><a href="http://jpn.nec.com/pcserver/ft/lineup.html" rel="nofollow noopener" target="_blank">http://jpn.nec.com/pcserver/ft/lineup.html</a></p>

                <ul>
                        <li>- Linux、Windows、VMware</li>
                        <li>システム停止につながる障害の原因となりやすいサーバのハードウェアを二重化して格納</li>
                        <li>二重化したモジュール全体でホットスワップを実現しているため、障害の発生した部品を交換する際もシステムの停止や再起動は不要。</li>
                </ul>

                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/cda1aa53-acb5-fb2a-b234-9aa7b52ff0df.png" rel="nofollow noopener" target="_blank"><img src="https://qiita-image-store.s3.amazonaws.com/0/156368/cda1aa53-acb5-fb2a-b234-9aa7b52ff0df.png" style="width:250px" /></a></p>

                <h2>ミッションクリティカルサーバの特徴まとめ</h2>

                <ul>
                        <li>ハードウェアの二重化</li>
                        <li>長年の同じ仕組みを使うことによるファームウェア、ドライバーの信頼性
                        <ul>
                                <li>長年無停止で使われてきたメインフレームなどの技術を採用</li>
                        </ul>
                        </li>
                        <li>ハードウェアに問題がある場合、ダンプ機能がしっかりしており、原因の特定が可能</li>
                </ul>

                <h1>ダウンタイム</h1>

                <p>ダウンタイムと表現する時、一般的には、「計画外ダウンタイム」になります。<br />
                メンテナンスを除いたサーバが動いている時間に対して、<br />
                計画外ダウンタイムをどのくらいにするかということです。<br />
                99.999%なら、計画外ダウンタイムが5.25分に抑えられることになります。</p>

                <p>私の考え方ですが、高額な高可用性サーバなら、故障なしで、ダウンタイム0秒を期待してしまいます。<br />
                ダウンしたサーバを早く復旧させるのは、高可用性サーバの特徴ではなく、クラスターソフトなどの役割です。<br />
                一度ダウンしてしまったサーバをOS再起動して、復旧すればそれでいいのかといったら、そんなことは期待していないです。</p>

                <p>この数値が大きければサーバが壊れにくいという目安ぐらいにとらえたいと思います。</p>
                ', 'minutes_detail_user_name' => '杉田 啓寿', 'minutes_detail_agenda' => '忙しいからどうしよう', 'user_id' => '315', 'minutes_detail_date' => '2017-07-17 15:08:00', 'created_at' => '2017-07-19 08:08:56', 'updated_at' => '2017-07-19 11:46:47'),
            array('minutes_detail_id' => '38', 'minutes_group_id' => '1015', 'minutes_detail_text' => '<h1>まずは</h1>

                <h1>&nbsp;</h1>

                <p>自分が健康になって見本をみせようよ。</p>

                <p>&nbsp;</p>
                ', 'minutes_detail_user_name' => '杉田 啓寿', 'minutes_detail_agenda' => 'みんなへ広めたい
                みんなへ知ってもらいたい
                ', 'user_id' => '315', 'minutes_detail_date' => '2017-07-14 18:25:00', 'created_at' => '2017-07-19 11:25:58', 'updated_at' => '2017-07-27 06:04:58'),
            array('minutes_detail_id' => '39', 'minutes_group_id' => '1016', 'minutes_detail_text' => '<p>・3年後30億達成に向けて</p>

                <p>　なにかなんでも3年後に30億達成しましょう！</p>

                <p>&nbsp;</p>

                <p>・給与査定</p>

                <p>　2017年9月度給与査定<br />
                  <span style="color:#e74c3c">今後の利益により変動します</span></p>
                ', 'minutes_detail_user_name' => '杉田 啓寿', 'minutes_detail_agenda' => '・3年後30億達成に向けて
                ・給与査定', 'user_id' => '315', 'minutes_detail_date' => '2017-07-27 13:58:00', 'created_at' => '2017-07-27 05:01:47', 'updated_at' => '2017-07-27 05:01:47'),
            array('minutes_detail_id' => '40', 'minutes_group_id' => '1016', 'minutes_detail_text' => '<p>今日は</p>

                <p>&nbsp;</p>

                <p>元気です</p>
                ', 'minutes_detail_user_name' => '進藤', 'minutes_detail_agenda' => '', 'user_id' => '2', 'minutes_detail_date' => '2017-07-14 21:05:00', 'created_at' => '2017-07-27 14:05:52', 'updated_at' => '2017-07-27 14:05:52')
        );


        DB::table('minutes_details')->insert($minutes_details);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
