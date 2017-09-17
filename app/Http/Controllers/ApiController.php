<?php

namespace App\Http\Controllers;

use App\ChartHelpers\PostPieChartBuilder;
use App\Queries\AlarmQuery;
use App\Queries\ArchivesQuery;
use App\Queries\FeaturedBookQuery;
use App\Queries\GridQueries\VideoByCategoryQuery;
use App\Queries\PostCountQuery;
use App\Queries\VideosByCategoryListQuery;
use Illuminate\Http\Request;
use App\Queries\GridQueries\GridQuery;
use App\Queries\GridQueries\UserQuery;
use App\Queries\GridQueries\CategoryQuery;
use App\Queries\GridQueries\PostQuery;
use App\Queries\CategoryListQuery;
use App\Queries\GridQueries\BookQuery;
use App\Queries\GridQueries\BlogResourceQuery;
use App\Queries\GridQueries\ContentQuery;
use App\Queries\ContentListQuery;
use App\Queries\GridQueries\OpenContactQuery;
use App\Queries\GridQueries\ClosedContactQuery;
use App\User;
use App\Post;
use App\Book;
use App\Queries\GridQueries\ContactQuery;
use App\Queries\GridQueries\ContactTopicQuery;
use App\BlogResource;
use App\Content;
use App\Contact;
use App\ChartHelpers\BuildsCharts;
use App\Queries\GridQueries\InfluencerQuery;
use App\Queries\InfluencerListQuery;
use App\Queries\GridQueries\ResourceTypeQuery;
use App\Queries\AllInfluencersQuery;
use App\Queries\AllBooksQuery;
use App\Queries\SiteListQuery;
use App\Queries\ExchangeListQuery;
use App\Queries\VideoListQuery;
use App\Queries\WalletListQuery;
use App\Queries\GridQueries\VideoQuery;
use App\Queries\ArticleListQuery;
use App\Queries\GridQueries\AllArticlesQuery;
use App\Queries\GridQueries\VideoCategoryGridQuery;
use App\Queries\GridQueries\VideoByLevelQuery;
use App\Queries\GridQueries\VideoLevelGridQuery;
use App\Queries\VideosByLevelListQuery;
use App\Queries\GridQueries\LevelQuery;
use App\Utilities\Summarize;
use App\ChartHelpers\VideoPieChartBuilder;
use App\Video;
use App\Influencer;
use App\ChartHelpers\UserPieChartBuilder;



class ApiController extends Controller
{



    public function aboutData()
    {

        $summary = Content::where('name', 'About')->first();

        $summary = ($summary['body']);

        $summary = Summarize::componentSummary($summary);


        return $summary;


    }

    public function alarmData()
    {

        return AlarmQuery::sendData();


    }

    public function alarmSupportData()
    {

        $data = Contact::where('status_id', 1)->count();

        return json_encode($data);


    }

    public function allArticleData(Request $request)
    {

        return GridQuery::sendData($request, new AllArticlesQuery());


    }

    public function allBooksData()
    {

        return AllBooksQuery::sendData();


    }

    public function allInfluencersData()
    {

        return AllInfluencersQuery::sendData();



    }

    public function allVideoData(Request $request)
    {

        return GridQuery::sendData($request, new VideoQuery);

    }

    public function archives()
    {

        return ArchivesQuery::sendData();

    }

    public function articleListData()
    {

        return ArticleListQuery::sendData();

    }

    public function blogResourceData(Request $request)
    {

        return GridQuery::sendData($request, new BlogResourceQuery);


    }

    public function bookData(Request $request)
    {

        return GridQuery::sendData($request, new BookQuery);

    }


    public function categoryData(Request $request)
    {

        return GridQuery::sendData($request, new CategoryQuery);

    }

    public function categoryList()
    {

        return CategoryListQuery::sendData();

    }


    public function closedContactData(Request $request)
    {

        return GridQuery::sendData($request, new ClosedContactQuery);

    }

    public function contactData(Request $request)
    {

        return GridQuery::sendData($request, new ContactQuery);


    }

    public function contactTopicData(Request $request)
    {

        return GridQuery::sendData($request, new ContactTopicQuery);

    }

    public function contentData(Request $request)
    {

        return GridQuery::sendData($request, new ContentQuery);

    }

    public function contentList()
    {

        return ContentListQuery::sendData();


    }

    public function exchangeListData()
    {


        return ExchangeListQuery::sendData();


    }

    public function featuredBook()
    {

        return FeaturedBookQuery::sendFeaturedBook();

    }

    public function influencerData(Request $request)
    {

        return GridQuery::sendData($request, new InfluencerQuery);


    }

    public function influencerList()
    {

        return InfluencerListQuery::sendData();

    }

    public function levelData(Request $request)
    {

        return GridQuery::sendData($request, new LevelQuery);

    }

    public function openContactData(Request $request)
    {

        return GridQuery::sendData($request, new OpenContactQuery);

    }

    public function pieChartData()
    {

        $data = new PostPieChartBuilder;


        return $data->getData();


    }

    public function postChartData(Request $request, BuildsCharts $chart)
    {

        return $chart->buildChart($request, ['posts']);


    }

    public function postData(Request $request)
    {

        return GridQuery::sendData($request, new PostQuery);

    }

    public function searchData(Request $request)
    {

        return Post::search($request->get('q'))->with('categories')->get();


    }

    public function resourceTypeData(Request $request)
    {

        return GridQuery::sendData($request, new ResourceTypeQuery);


    }

    public function signatureData()
    {

        return Content::where('name', 'Signature')->first();

    }

    public function siteListData()
    {


        return SiteListQuery::sendData();

    }


    public function totalBooks()
    {


        return Book::all()->count();


    }

    public function totalInfluencers()
    {


        return Influencer::all()->count();


    }

    public function totalPosts()
    {


        return Post::all()->count();


    }

    public function totalResources()
    {


        return BlogResource::all()->count();

    }

    public function totalUsers()
    {


        return User::all()->count();


    }

    public function totalVideos()
    {


        return Video::all()->count();


    }

    public function userChartData(Request $request, BuildsCharts $chart)
    {

        return $chart->buildChart($request, ['users']);


    }

    public function userData(Request $request)
    {

        return GridQuery::sendData($request, new UserQuery);

    }

    public function userPieChartData()
    {

        $data = new UserPieChartBuilder;


        return $data->getData();


    }

    public function videosByCategoryData(Request $request)
    {


        return VideoCategoryGridQuery::sendData($request,  new VideoByCategoryQuery);

    }

    public function videosByCategoryListData()
    {


        return VideosByCategoryListQuery::sendData();

    }

    public function videosByLevelData(Request $request)
    {


        return VideoLevelGridQuery::sendData($request,  new VideoByLevelQuery);

    }

    public function videosByLevelListData(Request $request)
    {


        return VideosByLevelListQuery::sendData();

    }

    public function videoChartData(Request $request, BuildsCharts $chart)
    {

        return $chart->buildChart($request, ['videos']);


    }

    public function videoListData()
    {

        return VideoListQuery::sendData();


    }

    public function videoData(Request $request)
    {

        return GridQuery::sendData($request, new VideoQuery);


    }

    public function walletListData()
    {


        return WalletListQuery::sendData();


    }

    public function videoPieChartData()
    {

        $data = new VideoPieChartBuilder;


        return $data->getData();


    }

    public function WarningData($id)
    {



        $warning = strtolower($id);

        $warning = Content::where('name', $warning)->first();

         return $warning
;
    }
}
