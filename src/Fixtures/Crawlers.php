<?php

/*
 * This file is part of Crawler Detect - the web crawler detection library.
 *
 * (c) Mark Beech <m@rkbee.ch>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jaybizzle\CrawlerDetect\Fixtures;

class Crawlers extends AbstractProvider
{
    /**
     * Array of regular expressions to match against the user agent.
     *
     * @var array
     */
    protected $data = array(
        '.*Java.*outbrain',
        '008\/',
        '^NING\/',
        'a3logics\.in',
        'A6-Indexer',
        'Aboundex',
        'Accoona-AI-Agent',
        'acoon',
        'AddThis',
        'ADmantX',
        'AHC',
        'Airmail',
        'alexa site audit',
        'Anemone',
        'Apache-HttpClient\/',
        'Arachmo',
        'aria2',
        'Astute',
        'archive-com',
        'autocite',
        'B-l-i-t-z-B-O-T',
        'Backlink-Ceck\.de',
        'baidu\.com',
        'BazQux',
        'bibnum\.bnf',
        'biglotron',
        'BingLocalSearch',
        'BingPreview',
        'binlar',
        'Bloglovin',
        'Blogtrottr',
        'boitho\.com-dc',
        'Browsershots',
        'BUbiNG',
        'Butterfly\/',
        'BuzzSumo',
        'CapsuleChecker',
        'CC Metadata Scaper',
        'Cerberian Drtrs',
        'changedetection',
        'Charlotte',
        'clips\.ua\.ac\.be',
        'CloudFlare-AlwaysOnline',
        'cmcm\.com',
        'coccoc',
        'CommaFeed',
        'Commons-HttpClient',
        'convera',
        'cosmos',
        'corporatetwitnews',
        'Covario-IDS',
        'cron-job\.org',
        'Crowsnest',
        'Curious George',
        'curb',
        'curl',
        'CyberPatrol',
        'cybo\.com',
        'DataparkSearch',
        'dataprovider',
        'Daum(oa)?[ \/][0-9]',
        'developers\.google\.com\/\+\/web\/snippet\/',
        'Digg',
        'Dispatch\/',
        'docoloc',
        'DomainAppender',
        'Dragonfly File Reader',
        'drupact',
        'Drupal (\+http:\/\/drupal\.org\/)',
        'e2pagemakker',
        'EARTHCOM',
        'ec2linkfinder',
        'ECCP',
        'ElectricMonk',
        'EMail Exractor',
        'EmailWolf',
        'Embed PHP Library',
        'Embedly',
        'europarchive\.org',
        'EventMachine HttpClient',
        'ExactSearch',
        'ExaleadCloudview',
        'ezooms',
        'facebookexternalhit',
        'facebookplatform',
        'Faveeo',
        'Feed Wrangler',
        'Feedbin',
        'FeedBurner',
        'FeedChecker',
        'Feedfetcher-Google',
        'Feedly',
        'Feedspot',
        'FeedValidator',
        'Fetch API',
        'Fever',
        'findlink',
        'findthatfile',
        'Flamingo_SearchEngine',
        'FlipboardProxy',
        'fluffy',
        'flynxapp',
        'fullstoryapp',
        'Funnelback',
        'g00g1e\.net',
        'Genieo',
        'getprismatic\.com',
        'GigablastOpenSource',
        'Go-http-client',
        'Google favicon',
        'Google Keyword Suggestion',
        'Google Page Speed Insights',
        'Google Web Preview',
        'Google-Apps-Script',
        'Google-HTTP-Java-Client',
        'Google-Site-Verification',
        'google_partner_monitoring',
        'GoogleProducer',
        'GoScraper',
        'Grammarly',
        'grouphigh',
        'grub-client',
        'Hatena',
        'HEADMasterSEO',
        'heritrix',
        'Holmes',
        'htdig',
        'HTTPMon',
        'http-kit',
        'http_requester',
        'httpunit',
        'HttpUrlConnection',
        'http_request2',
        'httrack',
        'HubPages.*crawlingpolicy',
        'HubSpot Marketing Grader',
        'ichiro',
        'IDG Twitter Links Resolver',
        'igdeSpyder',
        'InAGist',
        'infegy',
        'InfoWizards Reciprocal Link System PRO',
        'inpwrd\.com',
        'Integrity',
        'integromedb',
        'IODC',
        'IOI',
        'ips-agent',
        'iZSearch',
        '^Java\/',
        'Jigsaw',
        'jobo',
        'Jobrapido',
        'knows\.is',
        'KOCMOHABT',
        'kouio',
        'L\.webis',
        'Larbin',
        'libwww',
        'Link Valet',
        'linkCheck',
        'linkdex',
        'LinkExaminer',
        'LinkWalker',
        'Lipperhey',
        'link checker',
        'link validator',
        'LongURL API',
        'ltx71',
        'lwp-trivial',
        'lycos',
        'mabontland',
        'MagpieRSS',
        'MailChimp\.com',
        'Mandrill',
        'marketinggrader',
        'Mediapartners-Google',
        'Melvil Rawi\/',
        'MegaIndex\.ru',
        'MetaURI',
        'MergeFlow-PageReader',
        'Microsoft Office ',
        'Microsoft Windows Network Diagnostics',
        'Mnogosearch',
        'mogimogi',
        'Mojolicious (Perl)',
        'Morning Paper',
        'Mrcgiguy',
        'mShots',
        'MVAClient',
        'Netcraft Web Server Survey',
        'NetcraftSurveyAgent',
        'NetLyzer FastProbe',
        'netresearch',
        'NetTrack',
        'Netvibes',
        'NewsBlur .*(Fetcher|Finder)',
        'NewsGator',
        'newsme',
        'newspaper\/',
        'NG-Search',
        'nineconnections\.com',
        'node-superagent',
        'node\.io',
        'nominet\.org\.uk',
        'Notifixious',
        'notifyninja',
        'nuhk',
        'nutch',
        'Nuzzel',
        'Nymesis',
        'oegp',
        'okhttp',
        'Omea Reader',
        'omgili',
        'Optimizer',
        'Orbiter',
        'ow\.ly',
        'Go [\d\.]* package http',
        'page2rss',
        'PagePeeker',
        'panscient',
        'Peew',
        'PhantomJS\/',
        'phpcrawl',
        'phpservermon',
        'Pingdom\.com',
        'Pinterest',
        'Pizilla',
        'Ploetz \+ Zeller',
        'Plukkie',
        'PocketParser',
        'Pompos',
        'postano',
        'PostPost',
        'postrank',
        'prospectb2b',
        'proximic',
        'Pulsepoint XT3 web scraper',
        'Python-httplib2',
        'python-requests',
        'Python-urllib',
        'Qseero',
        'Qwantify',
        'Radian6',
        'Readability',
        'RebelMouse',
        'ReederForMac',
        'RetrevoPageAnalyzer',
        'Riddler',
        'Robosourcer',
        'ROI Hunter',
        'Ruby',
        'SalesIntelligent',
        'SBIder',
        'scooter',
        'ScoutJet',
        'ScoutURLMonitor',
        'Scrapy',
        'Scrubby',
        'SearchSight',
        'semanticdiscovery',
        'SEOstats',
        'Server Density Service Monitoring',
        'servernfo\.com',
        'Seznam screenshot-generator',
        'ShopWiki',
        'ShortLinkTranslate',
        'SilverReader',
        'SimplePie',
        'Site24x7',
        'SiteBar',
        'siteexplorer\.info',
        'Siteimprove\.com',
        'SkypeUriPreview',
        'slider\.com',
        'slurp',
        'SMRF URL Expander',
        'snapchat-proxy',
        'Snappy',
        'sniptracker',
        'SNK Siteshooter B0t',
        'sogou',
        'SortSite',
        'speedy',
        'Spinn3r',
        'spyonweb',
        'Sqworm',
        'StackRambler',
        'Stratagems Kumo',
        'summify',
        'teoma',
        'terrainformatica\.com',
        'theinternetrules',
        'theoldreader\.com',
        'TinEye',
        'Tiny Tiny RSS',
        'Traackr.com',
        'truwoGPS',
        'Tweetminster',
        'tweetedtimes\.com',
        'Twikle',
        'Twingly',
        'Typhoeus',
        'ubermetrics-technologies',
        'UdmSearch',
        'UnwindFetchor',
        'updated',
        'Upflow',
        'URLChecker',
        'urlresolver',
        'Vagabondo',
        'Validator\.nu\/LV',
        'virustotalcloud',
        'via ggpht\.com GoogleImageProxy',
        'vkShare',
        'Vortex',
        'voyager\/',
        'VYU2',
        'w3af\.org',
        'W3C-checklink',
        'W3C-mobileOK',
        'W3C_CSS_Validator_JFouffa',
        'W3C_I18n-Checker',
        'W3C_Unicorn',
        'W3C_Validator',
        'Wappalyzer',
        'WinHttpRequest',
        'web-capture\.net',
        'WeCrawlForThePeace',
        'WeLikeLinks',
        'WebCapture',
        'WebCorp',
        'webcollage',
        'WebIndex',
        'WebFetch',
        'webkit2png',
        'webmon ',
        'websitepulse[+ ]checker',
        'Webshot',
        'Websquash\.com',
        'WebThumbnail',
        'WeSEE:Search',
        'wf84',
        'wget',
        'WhatsApp',
        'WomlpeFactory',
        'WordPress\/',
        'wotbox',
        'wscheck',
        'WWW-Mechanize',
        'www\.monitor\.us',
        'XaxisSemanticsClassifier',
        'Xenu Link Sleuth',
        'XML Sitemaps Generator',
        'Y!J-ASR',
        'yacy',
        'Yahoo Ad monitoring',
        'Yahoo Link Preview',
        'YahooSeeker',
        'yandex',
        'yanga',
        'yeti',
        'yoogliFetchAgent',
        'yourls\.org',
        'Yo-yo',
        'YottaaMonitor',
        'Zao',
        'Zend_Http_Client',
        'zgrab',
        'ZyBorg',
        '[a-z0-9\-_]*((?<!cu)bot|crawler|archiver|transcoder|spider)',
    );
}
