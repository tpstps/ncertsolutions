             <?php

namespace App\Http\Controllers;

use App\Jobs\BlogIndexData;
use App\Http\Requests;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Services\RssFeed;
use App\Services\SiteMap;

class MathsController extends Controller
{
  public function index(Request $request)
  {

echo "inside maths controller";
exit;

//echo "ggggg";
//var_dump($request);

   // echo "htrtrssss";

    $tag = $request->get('tag');
    $data = $this->dispatch(new BlogIndexData($tag));

//echo "<pre>";
//print_r($data);


//exit;




    $layout = $tag ? Tag::layout($tag) : 'blog.layouts.index';

    return view($layout, $data);
  }
  public function showPost($slug, Request $request)
  {
    $post = Post::with('tags')->whereSlug($slug)->firstOrFail();
    $tag = $request->get('tag');
    if ($tag) {
        $tag = Tag::whereTag($tag)->firstOrFail();
    }

    return view($post->layout, compact('post', 'tag', 'slug'));
  }
  public function rss(RssFeed $feed)
  {
    $rss = $feed->getRSS();

    return response($rss)
      ->header('Content-type', 'application/rss+xml');
  }
  public function siteMap(SiteMap $siteMap)
  {
    $map = $siteMap->getSiteMap();

    return response($map)
      ->header('Content-type', 'text/xml');
  }
}
