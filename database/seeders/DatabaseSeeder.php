<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Clubs;
use App\Models\Category;
use App\Models\News;
use App\Models\Feedback;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Blog::factory(20)->create();

        Category::create([
            'slug' => 'bktbl',
            'name' => 'Basketball',
        ]);
        
        Category::create([
            'slug' => 'sccer',
            'name' => 'Soccer',
        ]);
        
        Category::create([
            'slug' => 'rning',
            'name' => 'Running',
        ]);
        
        Category::create([
            'slug' => 'tnnis',
            'name' => 'Tennis',
        ]);
        
        Category::create([
            'slug' => 'bdmtn',
            'name' => 'Badminton',
        ]);
        
        Category::create([
            'slug' => 'bsebl',
            'name' => 'Baseball',
        ]);

        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/cc/Chelsea_FC.svg/800px-Chelsea_FC.svg.png',
            'full_name' => 'Chelsea Football Club',
            'short_name' => 'CFC',
            'body_desc' => 'Chelsea Football Club is an English professional football club based in Fulham, West London. Founded in 1905, the club competes in the Premier League, the top division of English football. Chelsea are among England\'s most successful clubs, having won over thirty competitive honours, including six league titles and eight European trophies. Their home ground is Stamford Bridge.',
            'founded' => '10 March 1905',
            'owner' => 'Roman Abramovich',
            'head_coach' => 'Thomas Tuchel',
            'league' => 'Premier League'
        ]);

        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/800px-FC_Barcelona_%28crest%29.svg.png',
            'full_name' => 'Futbol Club Barcelona',
            'short_name' => 'FCB',
            'body_desc' => 'Futbol Club Barcelona (Catalan pronunciation: [fubˈbɔl ˈklub bəɾsəˈlonə] (About this soundlisten)), commonly referred to as Barcelona and colloquially known as Barça ([ˈbaɾsə]), is a Spanish professional football club based in Barcelona, Spain, that competes in La Liga, the top flight of Spanish football. Founded in 1899 by a group of Swiss, Spanish, German and English footballers led by Joan Gamper, the club has become a symbol of Catalan culture and Catalanism, hence the motto "Més que un club" ("More than a club"). Unlike many other football clubs, the supporters own and operate Barcelona. It is the fourth-most valuable sports team in the world, worth $4.06 billion, and the world\'s richest football club in terms of revenue, with an annual turnover of €840.8 million. The official Barcelona anthem is the "Cant del Barça", written by Jaume Picas and Josep Maria Espinàs. Barcelona traditionally play in dark shades of blue and red stripes, leading to the nickname Blaugrana.',
            'founded' => '29 November 1899',
            'owner' => 'Joan Laporta',
            'head_coach' => 'Xavi Hernandez',
            'league' => 'La Liga'
        ]);

        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/53/Arsenal_FC.svg/800px-Arsenal_FC.svg.png',
            'full_name' => 'The Arsenal Football Club',
            'short_name' => 'ARS',
            'body_desc' => 'Arsenal Football Club is a professional football club based in Islington, London, England. Arsenal plays in the Premier League, the top flight of English football. The club has won 13 league titles (including one unbeaten title), a record 14 FA Cups, two League Cups, 16 FA Community Shields, the League Centenary Trophy, one European Cup Winners\' Cup, and one Inter-Cities Fairs Cup.',
            'founded' => 'October 1886',
            'owner' => 'Kroenke Sports & Entertainment',
            'head_coach' => 'Mikel Arteta',
            'league' => 'Premier League'
        ]);

        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Atlanta_MLS.svg/800px-Atlanta_MLS.svg.png',
            'full_name' => 'Atlanta United Football Club',
            'short_name' => 'ATL UTD',
            'body_desc' => 'Atlanta United FC, commonly known as Atlanta United, is an American professional football club based in Atlanta, Georgia that competes in Major League Soccer (MLS) as a member of the Eastern Conference league. They are the latest winners of the US Open Cup and Campeones Cup.',
            'founded' => 'April 2014',
            'owner' => 'Arthur Blank',
            'head_coach' => 'Gonzalo Pineda',
            'league' => 'Major League Soccer'
        ]);

        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/Manchester_United_FC_crest.svg/800px-Manchester_United_FC_crest.svg.png',
            'full_name' => 'Manchester United Football Club',
            'short_name' => 'Man United',
            'body_desc' => 'Manchester United Football Club is a professional football club based in Old Trafford, Greater Manchester, England, that competes in the Premier League, the top flight of English football. Nicknamed "the Red Devils", the club was founded as Newton Heath LYR Football Club in 1878, changed its name to Manchester United in 1902 and moved to its current stadium, Old Trafford, in 1910.',
            'founded' => '1902',
            'owner' => 'Manchester United plc',
            'head_coach' => 'Ralf Rangnick',
            'league' => 'Premier League'
        ]);
        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/Manchester_City_FC_badge.svg/800px-Manchester_City_FC_badge.svg.png',
            'full_name' => 'Manchester City Football Club',
            'short_name' => 'Man City',
            'body_desc' => 'Manchester City Football Club is an English football club based in Manchester that competes in the Premier League, the top flight of English football. Founded in 1880 as St. Mark\'s (West Gorton), it became Ardwick Association Football Club in 1887 and Manchester City in 1894. The club\'s home ground is the Etihad Stadium in east Manchester, to which it moved in 2003, having played at Maine Road since 1923. The club adopted their sky blue home shirts in 1894 in the first season of the club\'s current iteration, that have been used ever since. They are currently ranked 6th in the all-time English top flight table since its creation in 1888, thus making it one of the country\'s most successful football clubs.',
            'founded' => '16 April 1894',
            'owner' => 'City Football Group',
            'head_coach' => 'Pep Guardiola',
            'league' => 'Premier League',
        ]);
        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f9/Aston_Villa_FC_crest_%282016%29.svg/800px-Aston_Villa_FC_crest_%282016%29.svg.png',
            'full_name' => 'Aston Villa Football Club',
            'short_name' => 'AVFC',
            'body_desc' => '<p>Aston Villa Football Club is an English professional football club based in Aston, Birmingham. The club competes in the Premier League, the top tier of the English football league system. Founded in 1874, they have played at their home ground, Villa Park, since 1897. Aston Villa were one of the founder members of the Football League in 1888 and of the Premier League in 1992. Villa are one of the five English clubs to have won the European Cup, in 1981–82. They have also won the Football League First Division seven times, the FA Cup seven times, the League Cup five times, and the European (UEFA) Super Cup once. The club are currently ranked 5th in the all-time English top flight table, since its creation in 1888.',
            'founded' => '21 November 1874',
            'owner' => 'Nassef Sawiris\, Wes Edens',
            'head_coach' => 'Steven Gerrard',
            'league' => 'Premier League'
        ]);
        
        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Liverpool_FC.svg/800px-Liverpool_FC.svg.png',
            'full_name' => 'Liverpool Football Club',
            'short_name' => 'The Reds',
            'body_desc' => '<p>Liverpool Football Club is a professional football club based in Liverpool, England, that competes in the Premier League, the top tier of English football. Domestically, the club has won nineteen League titles, seven FA Cups, a record eight League Cups and fifteen FA Community Shields. In international competitions, the club has won six European Cups, more than any other English club, three UEFA Cups, four UEFA Super Cups (also English records) and one FIFA Club World Cup.',
            'founded' => '3 June 1892',
            'owner' => 'Fenway Sports Group',
            'head_coach' => 'Jürgen Klopp',
            'league' => 'Premier League'
        ]);
        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2d/Leicester_City_crest.svg/800px-Leicester_City_crest.svg.png',
            'full_name' => 'Leicester City Football Club',
            'short_name' => 'The Foxes',
            'body_desc' => 'Leicester City Football Club is a professional football club based in Leicester in the East Midlands, England. The club competes in the Premier League, the top tier of England\'s football league system, and plays its home matches at the King Power Stadium. The club was founded in 1884 as Leicester Fosse F.C., playing on a field near Fosse Road. They moved to Filbert Street in 1891, were elected to the Football League in 1894 and adopted the name Leicester City in 1919. They moved to the nearby Walkers Stadium in 2002, which was renamed the King Power Stadium in 2011.',
            'founded' => '1884',
            'owner' => 'King Power',
            'head_coach' => 'Brendan Rodgers',
            'league' => 'Premier League'
        ]);
        
        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/b4/Tottenham_Hotspur.svg/800px-Tottenham_Hotspur.svg.png',
            'full_name' => 'Tottenham Hotspur Football Club',
            'short_name' => 'The Lilywhites',
            'body_desc' => 'Tottenham Hotspur Football Club, commonly referred to as Tottenham (/ˈtɒtənəm/)[2][3] or Spurs, is an English professional football club based in Tottenham, London, that competes in the Premier League, the top flight of English football. The team has played its home matches in the 62,850-capacity Tottenham Hotspur Stadium since April 2019, replacing their former home of White Hart Lane, which had been demolished to make way for the new stadium on the same site.',
            'founded' => '5 September 1882',
            'owner' => 'ENIC International Ltd.',
            'head_coach' => 'Antonio Conte',
            'league' => 'Premier League'
        ]);
        
        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/7/7c/Everton_FC_logo.svg/800px-Everton_FC_logo.svg.png',
            'full_name' => 'Everton Football Club',
            'short_name' => 'The Toffees',
            'body_desc' => 'Everton Football Club (/ˈɛvərtən/) is an English professional football club based in Liverpool that competes in the Premier League, the top tier of English football. The club is a founding member of the Football League and has competed in the top division for a record 118 seasons since the Football League\'s creation, having missed only four top-flight seasons (1930–31, 1951–52, 1952–53 and 1953–54). Everton is the second-longest continuous serving club in English top flight football and currently ranks third in the all-time points rankings. The club has won nine league titles, five FA Cups, one European Cup Winners\' Cup and nine Charity Shields.',
            'founded' => '1878',
            'owner' => 'Farhad Moshiri',
            'head_coach' => 'Rafael Benítez',
            'league' => 'Premier League'
        ]);
        
        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Real_Madrid_CF.svg/800px-Real_Madrid_CF.svg.png',
            'full_name' => 'Real Madrid Club de Fútbol',
            'short_name' => 'Los Blancos (The Whites)',
            'body_desc' => 'Real Madrid Club de Fútbol, meaning Royal Madrid Football Club), commonly referred to as Real Madrid, is a Spanish professional football club based in Madrid. Founded on 6 March 1902 as Madrid Football Club, the club has traditionally worn a white home kit since inception. The honorific title real is Spanish for "royal" and was bestowed to the club by King Alfonso XIII in 1920 together with the royal crown in the emblem. The team has played its home matches in the 81,044-capacity Santiago Bernabéu Stadium in downtown Madrid since 1947. Unlike most European sporting entities, Real Madrid\'s members (socios) have owned and operated the club throughout its history.',
            'founded' => '6 March 1902',
            'owner' => 'Florentino Pérez (President)',
            'head_coach' => 'Carlo Ancelotti',
            'league' => 'La Liga'
        ]);
        
        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Atletico_Madrid_2017_logo.svg/800px-Atletico_Madrid_2017_logo.svg.png',
            'full_name' => 'Club Atlético de Madrid, S.A.D.',
            'short_name' => 'Colchoneros (Mattress Makers)',
            'body_desc' => 'Club Atlético de Madrid, S.A.D. , commonly referred to as Atlético Madrid in English or simply as Atlético or Atleti, is a Spanish professional football club based in Madrid, that play in La Liga, the highest . The club play their home games at the Wanda Metropolitano Stadium, which has a capacity of 68,456.',
            'founded' => '26 April 1903',
            'owner' => 'Atlético HoldCo',
            'head_coach' => 'Diego Simeone',
            'league' => 'La Liga'
        ]);
        
        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/3/3b/Sevilla_FC_logo.svg/800px-Sevilla_FC_logo.svg.png',
            'full_name' => 'Sevilla Fútbol Club',
            'short_name' => 'Los Nervionenses',
            'body_desc' => 'Sevilla Fútbol Club , is a Spanish professional football club based in Seville, the capital and largest city of the autonomous community of Andalusia, Spain. It plays in Spanish football\'s top flight, La Liga. Sevilla at the European level, have won the UEFA Europa League six times, the most of any club. It is Spain\'s oldest sporting club solely devoted to football. The club was formed on 25 January 1890, with the Scottish born Edward Farquharson Johnston as their first president. On 14 October 1905, the club\'s articles of association were registered in the Civil Government of Seville under the presidency of the Jerez-born José Luis Gallegos Arnosa.',
            'founded' => '25 January 1890',
            'owner' => 'Sevillistas de Nervión S. A.',
            'head_coach' => 'Julen Lopetegui',
            'league' => 'La Liga'
        ]);
        
        
        Clubs::create([
            'categories_id' => 2,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/1/13/Real_betis_logo.svg/1024px-Real_betis_logo.svg.png',
            'full_name' => 'Real Betis Balompié, S.A.D.',
            'short_name' => 'Los Verdiblancos (The Green-and-Whites)',
            'body_desc' => 'Real Betis Balompié, known as Real Betis (pronounced [reˈal ˈβetis]) or just Betis, is a Spanish professional football club based in Seville in the autonomous community of Andalusia. Founded in 1907, it plays in La Liga, having won the Segunda División in the 2014–15 season. It holds home games at Estadio Benito Villamarín in the south of the city with 60,720-seat capacity.',
            'founded' => 'September 12, 1907',
            'owner' => 'Ángel Haro (President)',
            'head_coach' => 'Manuel Pellegrini',
            'league' => 'La Liga'
        ]);
        
        Clubs::create([
            'categories_id' => 1,
            'image' => '',
            'full_name' => '',
            'short_name' => '',
            'body_desc' => '',
            'founded' => '',
            'owner' => '',
            'head_coach' => '',
            'league' => ''
        ]);
        
        Clubs::create([
            'categories_id' => 1,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/25/New_York_Knicks_logo.svg/1024px-New_York_Knicks_logo.svg.png',
            'full_name' => 'New York Knickerbockers',
            'short_name' => 'Knicks',
            'body_desc' => 'The New York Knickerbockers,[3][7] shortened and more commonly referred to as the New York Knicks, are an American professional basketball team based in the New York City borough of Manhattan. The Knicks compete in the National Basketball Association (NBA) as a member of the Atlantic Division of the Eastern Conference. The team plays its home games at Madison Square Garden, an arena they share with the New York Rangers of the National Hockey League (NHL). They are one of two NBA teams located in New York City; the other team is the Brooklyn Nets. Alongside the Boston Celtics, the Knicks are one of two original NBA teams still located in its original city.',
            'founded' => '1946',
            'owner' => 'Madison Square Garden Sports',
            'head_coach' => 'Tom Thibodeau',
            'league' => 'NBA'
        ]);
        
        Clubs::create([
            'categories_id' => 1,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/8f/Boston_Celtics.svg/800px-Boston_Celtics.svg.png',
            'full_name' => 'Boston Celtics',
            'short_name' => 'Celtics',
            'body_desc' => 'The Boston Celtics (/ˈsɛltɪks/ SEL-tiks) are an American professional basketball team based in Boston. The Celtics compete in the National Basketball Association (NBA) as a member of the league\'s Eastern Conference Atlantic Division. Founded in 1946 as one of the league\'s original eight teams, the Celtics play their home games at TD Garden, which they share with the National Hockey League\'s Boston Bruins. The Celtics are regarded as one of the most successful basketball teams in NBA history; the franchise is tied with the Los Angeles Lakers for most NBA Championships won with 17 (accounting for 23.6 percent of all NBA championships since the league\'s founding) and currently holds the record for the most recorded wins of any NBA team.',
            'founded' => '1946',
            'owner' => 'Boston Basketball Partners',
            'head_coach' => 'Ime Udoka',
            'league' => 'NBA'
        ]);
        
        Clubs::create([
            'categories_id' => 1,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Los_Angeles_Lakers_logo.svg/1280px-Los_Angeles_Lakers_logo.svg.png',
            'full_name' => 'Los Angeles Lakers',
            'short_name' => 'Lakers',
            'body_desc' => 'The Los Angeles Lakers are an American professional basketball team based in Los Angeles. The Lakers compete in the National Basketball Association (NBA) as a member of the league\'s Western Conference Pacific Division. The Lakers play their home games at Crypto.com Arena, an arena shared with the NBA\'s Los Angeles Clippers, the Los Angeles Sparks of the Women\'s National Basketball Association, and the Los Angeles Kings of the National Hockey League. The Lakers are one of the most successful teams in the history of the NBA, and have won 17 NBA championships, tied with the Boston Celtics for the most in NBA history.',
            'founded' => '1947',
            'owner' => 'Buss Family Trusts',
            'head_coach' => 'Frank Vogel',
            'league' => 'NBA'
        ]);
        
        Clubs::create([
            'categories_id' => 1,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/01/Golden_State_Warriors_logo.svg/800px-Golden_State_Warriors_logo.svg.png',
            'full_name' => 'Golden State Warriors',
            'short_name' => 'GSW',
            'body_desc' => 'The Golden State Warriors are an American professional basketball team based in San Francisco. The Warriors compete in the National Basketball Association (NBA), as a member of the league\'s Western Conference Pacific Division. Founded in 1946 in Philadelphia, the Warriors moved to the San Francisco Bay Area in 1962 and took the city\'s name, before changing its geographic moniker to Golden State in 1971. The club plays its home games at the Chase Center.',
            'founded' => '1946',
            'owner' => 'Joe Lacob',
            'head_coach' => 'Steve Kerr',
            'league' => 'NBA'
        ]);
        
        Clubs::create([
            'categories_id' => 1,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/3/36/Toronto_Raptors_logo.svg/800px-Toronto_Raptors_logo.svg.png',
            'full_name' => 'Toronto Raptors',
            'short_name' => 'Raptors',
            'body_desc' => 'The Toronto Raptors are a Canadian professional basketball team based in Toronto. The Raptors compete in the National Basketball Association (NBA) as a member of the league\'s Eastern Conference Atlantic Division. They play their home games at Scotiabank Arena, which they share with the Toronto Maple Leafs of the National Hockey League (NHL). The team was founded in 1995 as part of the NBA\'s expansion into Canada, along with the Vancouver Grizzlies. Since the 2001–02 season, the Raptors have been the only Canadian-based team in the league, as the Grizzlies relocated from Vancouver to Memphis, Tennessee.',
            'founded' => '1995',
            'owner' => 'Maple Leaf Sports & Entertainment',
            'head_coach' => 'Nick Nurse',
            'league' => 'NBA'
        ]);
        
        Clubs::create([
            'categories_id' => 1,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Brooklyn_Nets_newlogo.svg/800px-Brooklyn_Nets_newlogo.svg.png',
            'full_name' => 'Brooklyn Nets',
            'short_name' => 'Nets',
            'body_desc' => 'The Brooklyn Nets are an American professional basketball team based in the New York City borough of Brooklyn. The Nets compete in the National Basketball Association (NBA) as a member of the Atlantic Division of the Eastern Conference. The team plays its home games at Barclays Center. They are one of two NBA teams located in New York City; the other is the New York Knicks. The club was established in 1967 as a charter franchise of the NBA\'s rival league, the American Basketball Association (ABA). They played in New Jersey as the New Jersey Americans during their first season, before relocating to Long Island, New York, in 1968 and changing their name to the New York Nets. During this time, the Nets won two ABA championships (in 1974 and 1976). In 1976, the ABA merged with the NBA, and the Nets were absorbed into the NBA along with three other ABA teams (the San Antonio Spurs, Indiana Pacers, and Denver Nuggets), all of whom remain in the league to this day.',
            'founded' => '1967',
            'owner' => 'Joseph Tsai',
            'head_coach' => 'Steve Nash',
            'league' => 'NBA'
        ]);
        
        
        Clubs::create([
            'categories_id' => 1,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/4b/Cleveland_Cavaliers_logo.svg/800px-Cleveland_Cavaliers_logo.svg.png',
            'full_name' => 'Cleveland Cavaliers',
            'short_name' => 'Cavs',
            'body_desc' => 'The Cleveland Cavaliers (often referred to as the Cavs) are an American professional basketball team based in Cleveland. The Cavaliers compete in the National Basketball Association (NBA) as a member of the league\'s Eastern Conference Central Division. The team began play as an expansion team in 1970, along with the Portland Trail Blazers and Buffalo Braves. Home games were first held at Cleveland Arena from 1970 to 1974, followed by the Richfield Coliseum from 1974 to 1994. Since 1994, the Cavs have played home games at Rocket Mortgage FieldHouse in downtown Cleveland, which is shared with the Cleveland Monsters of the American Hockey League. Dan Gilbert has owned the team since March 2005.',
            'founded' => '1970',
            'owner' => 'Dan Gilbert',
            'head_coach' => 'J. B. Bickerstaff',
            'league' => 'NBA'
        ]);
        
        Clubs::create([
            'categories_id' => 1,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/4a/Milwaukee_Bucks_logo.svg/800px-Milwaukee_Bucks_logo.svg.png',
            'full_name' => 'Milwaukee Bucks',
            'short_name' => 'Bucks',
            'body_desc' => 'The Milwaukee Bucks are an American professional basketball team based in Milwaukee. The Bucks compete in the National Basketball Association (NBA) as a member of the league\'s Eastern Conference Central Division. The team was founded in 1968 as an expansion team, and play at Fiserv Forum. Former U.S. Senator Herb Kohl was the long-time owner of the team, but on April 16, 2014, a group led by billionaire hedge fund managers Wes Edens and Marc Lasry agreed to purchase a majority interest in the team from Kohl, a sale which was approved by the owners of the NBA and its Board of Governors one month later on May 16. The team is managed by Jon Horst the team\'s former director of basketball operations, who took over from John Hammond.',
            'founded' => '1968',
            'owner' => 'Wes Edens, Marc Lasry, Jamie Dinan, Mike Fascitelli',
            'head_coach' => 'Mike Budenholzer',
            'league' => 'NBA'
        ]);

        // -------------------------    N E W S     ---------------------
        News::create([
            'category_id' => '2',
            'slug' => 'arteta_praises_arsenal_fight_as_10-man_Gunners_frustrate_liverpool',
            'title' => 'Arteta praises Arsenal fight as 10-man Gunners frustrate Liverpool',
            'excerpt' => 'Liverpool are left frustrated by 10-man Arsenal as the sides play out a goalless draw in the first leg of their Carabao Cup semi-final at Anfield',
            'image' => 'https://ichef.bbci.co.uk/onesport/cps/976/cpsprodpb/F866/production/_122709536_gettyimages-1364478622.jpg',
            'body' => '<b>Arsenal manager Mikel Arteta praised his side\'s "fight, determination and brotherhood" after the 10-man Gunners frustrated Liverpool in the first leg of their Carabao Cup semi-final at Anfield.</b> <p>Granit Xhaka was dismissed after 24 minutes for denying a goalscoring opportunity - the Swiss midfielder catching Diogo Jota with a high challenge on the edge of his penalty area as he attempted to cut out Andrew Robertson\'s pass.</p> <p>Trent Alexander-Arnold could not punish Arsenal further from the resulting free-kick, however, and the visitors produced a resolute defensive display to leave on level terms.</p> <p>Despite coming under intense pressure it was Arsenal who registered the first shot on target 71 minutes into the contest, but a poor first touch by Bukayo Saka allowed Alisson to smother the England international\'s shot at close range.</p> <p>Takumi Minamino blazed over the crossbar when faced with an open goal with Liverpool\'s best chance of the match in the closing stages.</p> <p>"They never gave up even though it\'s extremely difficult against this opponent," said Arteta.</p> <p>"I said to the players before the game that you have to have a certain attitude and in difficult moments you have to react - I think the boys did that very well," he added.</p> <p>"We played the game we had to play. I\'m expecting now our fans will create an even better atmosphere [in the second leg] than today."</p>',
        ]);

        News::create([
            'category_id' => '4',
            'slug' => 'Australian_Open:_Novak_Djokovic_in_draw,_Emma_Raducanu_plays_Sloane_Stephens',
            'title' => 'Australian Open: Novak Djokovic in draw, Emma Raducanu plays Sloane Stephens',
            'excerpt' => 'Novak Djokovic remains in the Australian Open draw as the decision over whether the defending champion can stay in the country drags on.',
            'image' => 'https://ichef.bbci.co.uk/onesport/cps/976/cpsprodpb/16CA5/production/_122694339_djokovic.jpg',
            'body' => '<b>Novak Djokovic remains in the Australian Open draw as the decision over whether the defending champion can stay in the country drags on.</b> <p>The nine-time champion has been drawn against fellow Serb Miomir Kecmanovic.</p> <p>Britain\'s US Open champion Emma Raducanu, seeded 17th, faces American world number 68 Sloane Stephens, the 2017 champion at the New York major.</p> <p>The Australian Open is the first Grand Slam of the 2022 season and starts at Melbourne Park on Monday.</p> <p>The draw was originally supposed to take place at 3pm local time (04:00 GMT) on Thursday but was delayed by one hour and 15 minutes.</p> <p>Australian Prime Minister Scott Morrison held a news conference to update the country about the coronavirus pandemic at 3:45pm, although he declined to say when a decision about Djokovic might be made.</p> <p>Top seed Djokovic, 34, practised again at Melbourne Park earlier on Thursday, with Australia\'s immigration minister Alex Hawke still considering whether to revoke his visa again and throw him out of the country.</p> <p>The world number one is hoping to win a record-extending 10th Australian Open men\'s title which would be his 21st Grand Slam triumph, moving him clear of Switzerland\'s Roger Federer and Spain\'s Rafael Nadal.</p> <p>Djokovic has not been vaccinated against Covid-19 and had his visa revoked when he arrived in Australia last week, following questions over the vaccine exemption that would have permitted him to enter.</p> <p>However, on Monday a judge dramatically overturned the decision and ordered his release from an immigration detention hotel after finding that border officials had not followed proper procedure.</p> <p>On Wednesday, Djokovic admitted to meeting a L\'Equipe journalist on 18 December despite knowing he had tested positive for Covid, as well as there being mistakes on his immigration forms.</p>',
        ]);

        News::create([
            'category_id' => '4',
            'slug' => 'Novak_Djokovic:_World_number_one_\'playing_by_his_own_rules\'_-_Tsitsipas',
            'title' => 'Novak Djokovic: World number one \'playing by his own rules\' - Tsitsipas',
            'excerpt' => 'Novak Djokovic is "playing by his own rules" and has made vaccinated tennis players "look like fools", world number four Stefanos Tsitsipas has said.',
            'image' => 'https://ichef.bbci.co.uk/onesport/cps/976/cpsprodpb/19A9/production/_122696560_gettyimages-1323915783.jpg',
            'body' => '<b>Novak Djokovic is "playing by his own rules" and has made vaccinated tennis players "look like fools", world number four Stefanos Tsitsipas has said.</b> <p>Record nine-time winner and top seed Djokovic, 34, remains in the Australian Open draw as the decision over whether the defending champion can stay in the country drags on</p> <p>"For sure, he\'s been playing by his own rules and has been doing what not many players had the guts to do," Greece\'s Tsitsipas told India\'s WION news channel.</p> <p>"Especially after the ATP announced certain criteria for players to enter the country."</p> <p>Djokovic, who is unvaccinated, had his visa revoked when he arrived in Australia last week, following questions over the vaccine exemption that would have permitted him to enter.</p> <p>However, on Monday a judge overturned the decision and ordered his release from an immigration detention hotel after finding that border officials had not followed proper procedure.</p> <p>In an Instagram post on Wednesday, Djokovic admitted to meeting a L\'Equipe journalist on 18 December despite knowing he had tested positive for Covid, as well as there being mistakes on his immigration forms.</p> <p>Australian Prime Minister Scott Morrison held a news conference to update the country about the coronavirus pandemic on Thursday, although he declined to say when a decision about Djokovic might be made.</p> <p>Tsitsipas, who lost to Djokovic in last year\'s French Open final, added: "No-one really thought they could come to Australia unvaccinated and not having to follow the protocols... it takes a lot of daring to do and putting the Grand Slam at risk, which I don\'t think many players would do.</p> <p>"I chose to go and be 100% ready for whatever was to come and not have to think about anything else."</p> <p>The ATP, which governs men\'s tennis, has said 97 of the top 100 male players are vaccinated.</p> <p>American world number 93 Tennys Sandgren told reporters earlier this month that he had pulled out of the Australian Open because of the vaccine mandate and he opted not to apply for a medical exemption.</p> <p>Asked if Djokovic should defend his title at Melbourne Park next week, Tsitsipas said: "There are two ways to look at it. One way is that almost every single player is vaccinated and did what they had to do in order to come and perform and play in Australia.</p> <p>"On the other sense, it seems not everyone is playing by the rules...a very small [minority] chose to follow their own way, which kind of makes the majority look like fools."</p> <p>The Australian Open begins on 17 January. Djokovic, who is hunting a record 21st Grand Slam men\'s singles title, has been drawn to play fellow Serb Miomir Kecmanovic in the first round, with Tsitsipas up against Sweden\'s Mikael Ymer.</p>',
        ]); 

        News::create([
            'category_id' => '2',
            'slug' => 'Giroud_helps_Milan_into_Coppa_Italia_last_eight',
            'title' => 'Giroud helps Milan into Coppa Italia last eight',
            'excerpt' => 'AC Milan came from behind to defeat fellow Serie A side Genoa after extra time in the Coppa Italia last 16.',
            'image' => 'https://ichef.bbci.co.uk/onesport/cps/976/cpsprodpb/B23D/production/_122692654_oliviergiroud.jpg',
            'body' => '<b>AC Milan came from behind to defeat fellow Serie A side Genoa after extra time in the Coppa Italia last 16.</b> <p>Brighton loanee Leo Skiri Ostigard had given Genoa a surprise first-half lead, but former Arsenal and Chelsea striker Olivier Giroud headed in from Theo Hernandez\'s cross to force extra time.</p> <p>In the 102nd minute, Rafael Leao put Milan ahead for the first time.</p> <p>Hernandez set up Alexis Saelemaekers to score Milan\'s third goal and take Stefano Pioli\'s side through.</p> <p>Milan, second in Serie A, have won the Coppa Italia five times, with their last success being in 2003, and they now face either Lazio or Udinese at home in the quarter-final in February.</p>',
        ]);

        News::create([
            'category_id' => '2',
            'slug' => 'Lucas_Digne_joins_Aston Villa from Everton in £25m deal',
            'title' => 'Lucas Digne joins Aston Villa from Everton in £25m deal',
            'excerpt' => 'French left-back Lucas Digne has joined Aston Villa from Everton on a deal worth up to £25m',
            'image' => 'https://ichef.bbci.co.uk/onesport/cps/976/cpsprodpb/B139/production/_122696354_gettyimages-1364362347.jpg',
            'body' => '<b>French left-back Lucas Digne has joined Aston Villa from Everton on a deal worth up to £25m.</b> <p>The 28-year-old fell out of favour at Everton this season under manager Rafael Benitez, who said last week Digne had asked to leave the club.</p> <p>Digne, who has signed on a four-and-a-half-year deal, said he did not expect his time at Everton "to end this way".</p> <p>"When Lucas became available we jumped at the opportunity to bring him to the club," said Villa boss Steven Gerrard.</p> <p>"To sign a player of his pedigree and quality in the January window is a great addition to our squad and his arrival excites me and everyone associated with Aston Villa."</p> <p>Digne said he had joined Villa because of Gerrard. "It was the main factor. I came here for the manager," he said.</p> <p>"I had a very good meeting with him and we spoke a couple of times during this month. I feel his desire to win - the attacking football, the possession.</p> <p>"I feel it\'s what I want and what I want to show to the fans."</p> <p>Everton signed Digne from Barcelona in the summer of 2018 for £18m under former manager Marco Silva.</p> <p>He went on to make 127 appearances for the Goodison Park club, scoring six goals.</p> <p>Digne made 15 appearances for Everton this season but had not played for them since 1 December.</p> <p>Several clubs registered their interest in the left-back, including Newcastle United, Chelsea and sides from Serie A, but Villa were ultimately successful in securing his signature.</p> <p>"What has happened and some things that was said about me in the last month has made me very sad," Digne wrote in a post on Instagram.</p> <p>"But I will not enter a war on words with anyone.</p> <p>"The club don\'t deserve that, the fans don\'t deserve that - and to be honest, I don\'t feel that I deserve that."</p> <p>He added: "Sometimes it only takes one person from outside to destroy a beautiful love affair."</p> <p>Digne is Villa\'s second signing of the January transfer window, the Midlands club having also brought in Brazil playmaker Philippe Coutinho on loan from Barcelona.</p>',
        ]);

        News::create([
            'category_id' => '2',
            'slug' => 'Tottenham:_Antonio_Conte\'s_need_for_investment_shown_by_loss_to_Chelsea',
            'title' => 'Tottenham: Antonio Conte\'s need for investment shown by loss to Chelsea',
            'excerpt' => 'If Antonio Conte needed to present Tottenham chairman Daniel Levy with any more evidence of the need for serious investment in his squad, a DVD of this Carabao Cup semi-final with Chelsea should seal the deal.',
            'image' => 'https://ichef.bbci.co.uk/onesport/cps/976/cpsprodpb/1613D/production/_122692409_gettyimages-1364260888.jpg',
            'body' => '<b>If Antonio Conte needed to present Tottenham chairman Daniel Levy with any more evidence of the need for serious investment in his squad, a DVD of this Carabao Cup semi-final with Chelsea should seal the deal.</b> <p>Conte\'s burning desire and ambition for success makes him a demanding manager - and there is nothing wrong with that given his stellar record with Juventus, Chelsea and Inter Milan.</p> <p>The Italian has been at pains to point out he did not sugar-coat his words about the squad he inherited from predecessors Jose Mourinho and Nuno Espirito Santo when in talks with Levy and managing director Fabio Paratici.</p> <p>If they were in any doubt as to what Conte\'s Spurs need before they can even think about working a way back into the Premier League elite, the manner in which they were brushed aside by Chelsea over two legs should act as the manager\'s Exhibit A.</p> <p>Conte, though, will have to explain why he played reserve keeper Pierluigi Gollini instead of the experienced Hugo Lloris in Wednesday\'s second leg, with Tottenham starting 2-0 down and with no margin for error. Gollini was at fault for an injudicious attempt to meet Mason Mount\'s 18th-minute corner, which ended in the net via Antonio Rudiger\'s back.</p> <p>Lloris played in the first leg, so why not here?</p> <p>It was a strange, costly decision but in reality this Spurs team was in no sort of shape to claw back that first-leg deficit against an impressive and powerful Chelsea.</p> <p>Spurs were laboured, uninspired and, in the first 45 minutes, looked overawed, having been deflated by the concession of an early goal.</p> <p>They delivered a rally of sorts after the break but they could not even turn to any VAR complaints as two penalties and a second-half strike from Harry Kane were correctly overturned by technology.</p> <p>Conte has not come to Spurs to stand still but he faces a mountainous task to have them even rubbing shoulders with Chelsea, Liverpool and Manchester City, let alone deliver the sort of successes he enjoyed at his previous clubs.</p> <p>Conte is a combustible character not exactly known for his patience - but he might need some if he is to succeed in piecing Spurs back together.</p> <p>There will be no quick fix. Spurs have been allowed to fall too far from the riches of the 2019 Champions League final under Mauricio Pochettino.</p> <p>Yes, Spurs were missing Son Heung-min but the lack of spark, with Kane again struggling to impose himself, left the home fans frustrated, with jeers both at half-time and from those left inside the stadium at the final whistle.</p> <p>This was another opportunity for a trophy gone. Only the FA Cup remains as a chance for Spurs to end a barren run without silverware stretching back to the 2008 win over Chelsea in this competition under the management of Juande Ramos.</p> <p>Spurs actually reached the final of this competition under Mourinho last season, only to demonstrate their dysfunctionality by sacking him in Wembley week and appointing Ryan Mason to take charge of the subsequent defeat by Manchester City.</p> <p>Conte needs to inject fresh life and impetus into this Spurs team. It will have hurt him to watch the relative ease with which his former club progressed into a final against either Arsenal or Liverpool.</p> <p>He will want some serious churn in this squad to get anywhere near his exacting standards, with Wolves powerhouse Adama Traore firmly on Spurs\' radar.</p> <p>It may also be a time for departures too, with Dele Alli, Tanguy Ndombele and others potentially bargaining chips to renew Conte\'s team in the weeks ahead.</p> <p>What is clear is that Conte\'s current Spurs are simply not good enough for what he expects and to match his previous record of success. The manager\'s comments this week suggest he has made this brutally clear to those in power at Spurs.</p> <p>For all this, Conte and Spurs will not have written off their Premier League top-four hopes. They are currently four points behind West Ham United, who are in fourth, and have three games in hand. They will leapfrog north London rivals Arsenal with victory in the derby at home on Sunday.</p> <p>For all this, Conte and Spurs will not have written off their Premier League top-four hopes. They are currently four points behind West Ham United, who are in fourth, and have three games in hand. They will leapfrog north London rivals Arsenal with victory in the derby at home on Sunday.</p> <p>All is not lost but there are serious doubts as to whether Spurs have the ability to take advantage of the opportunity.</p> <p>Conte has not come to Spurs to stand still. He lives for success and trophies but even he may be shocked at just how big a job he has taken on, proved by the gulf between his new club and the one he took to the Premier League and FA Cup in two successful, eventful years at Stamford Bridge.</p>',
        ]);

        News::create([
            'category_id' => '2',
            'slug' => 'Mohamed Salah:_Jamie_Carragher_says_Liverpool_owners_would_never_be_forgiven_if_\'club_legend\'_left',
            'title' => 'Mohamed Salah: Jamie Carragher says Liverpool owners would never be forgiven if \'club legend\' left',
            'excerpt' => 'Jamie Carragher on Mohamed Salah contract situation: "He\'s a Liverpool legend, one of the club\'s greatest ever players, it needs to be sorted sooner rather than later"',
            'image' => 'https://www.thisisanfield.com/wp-content/uploads/2021-10-16-250-Watford_Liverpool.jpeg',
            'body' => '<b>Jamie Carragher has warned Liverpool’s owners they will never be forgiven if they allow club legend Mohamed Salah to leave the club.</b> <p>Egypt international Salah, whose current deal at Liverpool runs until the summer of 2023, has consistently expressed his desire to remain at Anfield amid ongoing talks over a new contract.</p> <p>In a recent interview with GQ magazine, Salah claimed he was "not asking for crazy stuff" during negotiations with Liverpool which Reds boss Jurgen Klopp insists are "in a good place".</p> <p>Salah, who along with Senegal\'s Sadio Mane is away on Africa Cup on Nations duty, was absent as Liverpool failed to overcome 10-man Arsenal in the semi-finals of the Carabao Cup on Thursday.</p> <p>It was a performance Carragher felt amplified their importance to Liverpool, as well as the need to get Salah\'s future sorted as a matter of urgency.</p> <p>"Those two players [Salah and Mane] are obviously a big miss and this talk of Salah\'s contract will probably intensify even more because when he is not there, you see the effect it has," Carragher told Sky Sports after Arsenal\'s 0-0 draw at Anfield.</p> <p>"As a Liverpool supporter you should be wary that this [Salah\'s contract situation] is dragging on. Other big players at Liverpool have signed contracts in the last three or four months, the goalkeeper [Alisson Becker], Trent [Alexander-Arnold], Virgil van Dijk, huge figures in this team.</p> <p>"Salah wants to be paid as well as any top player in the Premier League or world football, and why shouldn\'t he? He deserves that, we\'re talking about one of the best players in the world.</p> <p>"The problem, and the angle Liverpool may be looking at it from, is where Salah would go? The Spanish giants [Real Madrid and Barcelona] are really out of the equation now given the problems they have financially. Would Salah leave and ruin his legacy by going to Manchester City or Manchester United? Probably not, so that\'s probably Liverpool\'s bargaining chip.</p> <p>"I would love this deal to be done as quickly as possible. You cannot forget the price Liverpool signed Salah for. It wasn\'t as if they went and spent £100million, they did what they are great at and did a brilliant deal. The money they have invested in him already - transfer fee and wages - has been a snip.</p> <p>"This is not a case of giving the player exactly what he wants, but Liverpool Football Club and the owners, I don\'t think they would be forgiven if Salah left this club in the summer or in 18 months\' time.</p> <p>"He\'s a Liverpool legend, one of the greatest players the club has ever had, and it needs to be sorted sooner rather than later."</p>',
        ]);

        News::create([
            'category_id' => '1',
            'slug' => 'NBA_Power_Rankings...',
            'title' => 'NBA Power Rankings: Streaking Grizzlies take No. 1 spot with Heat close behind; Knicks, Hornets on the rise
        NBA Power Rankings: Streaking Grizzlies take No. 1 spot with Heat close behind; Knicks, Hornets on the rise ',
            'excerpt' => 'The Grizzlies are proving that they\'re a bona fide contender in the West',
            'image' => 'https://sportshub.cbsistatic.com/i/r/2022/01/13/4859f5e2-ea77-4716-b13c-1b2848d90d4f/thumbnail/770x433/e2df5ce7602a5b8d1445c33508210d1e/nba-power-rankings.png',
            'body' => '<p>It makes you wonder why we even make predictions. At this point in the season, many would have pegged the Brooklyn Nets, Milwaukee Bucks and Los Angeles Lakers to be duking it out for NBA supremacy. Instead, halfway through the season, we\'re looking at the Memphis Grizzlies in the No. 1 spot in this week\'s Power Rankings on the strength of a 10-game win streak, along with all of the accompanying swagger.</p> <p>The Grizzlies picked up four more wins this week despite missing key players, and missteps by the teams behind them allowed Memphis to forcefully seize the top spot. Right behind them are the Miami Heat, who delivered two demonstrative wins this week without Jimmy Butler and moved up seven spots to No. 2.</p> <p>The biggest fallers of the week were the Utah Jazz, who drop out of the top 10 after losing four straight games partly due to players being out with injuries and/or in protocols. On the flip side are the Charlotte Hornets, who moved up eight spots to No. 7 thanks to three straight wins over quality opponents. The Los Angeles Lakers also fell six spots after dropping two of three games, despite LeBron James continuing his tremendous individual season.</p> <p>Here are this week\'s NBA Power Rankings as we approach the halfway point of the 2021-22 season.</p>',
        ]);
        
        News::create([
            'category_id' => '1',
            'slug' => 'Cam_Reddish_trade_grades...',
            'title' => 'Cam Reddish trade grades: Knicks bet on wing\'s upside, Hawks gain pick for future deal
        Cam Reddish trade grades: Knicks bet on wing\'s upside, Hawks gain pick for future deal',
            'excerpt' => 'A nice get for New York, but be careful judging this before Reddish\'s extension and Atlanta\'s next move',
            'image' => 'https://sportshub.cbsistatic.com/i/r/2022/01/13/5ee604fc-cd5c-4e0a-ae72-02e46e3c2f22/thumbnail/770x433/e0960263595f96fc4fcd54641127278a/cam-reddish-hawks.jpg',
            'body' => '<p>It\'s not every day that a productive, 22-year-old wing is available on the trade market, let alone who is six months removed from an explosive performance in a conference finals game. On Thursday, the New York Knicks reportedly acquired Cam Reddish from the team that beat them, convincingly, in last year\'s playoffs.</p> <p>Reddish wasn\'t available for the Atlanta Hawks in that series, but returned from an Achilles injury to play in four games against the Milwaukee Bucks. In the final game of Atlanta\'s unexpectedly successful season, he came off the bench to shoot 6-for-7 from 3-point range, leading a comeback that ultimately came up short.</p> <p>That barrage was a reminder that, oh yeah, the Hawks have him, too. Their front office, led by general manager Travis Schlenk, had hit on so many draft picks that they had a "good problem" -- they now had to decide how to distribute the money, minutes and touches. </p> <p>Atlanta could have broken up its young core last summer to get ahead of this. Instead, it brought the band back, and that hasn\'t worked out, so it has pivoted. The Hawks have effectively chosen the flexibility offered by a protected first-round pick over the opportunity to remain in the Reddish business. He is eligible for a rookie contract extension this coming summer, and, if he doesn\'t sign it, he will be a restricted free agent a year later. Atlanta was not interested in giving him that extension, or at least the kind of extension that he would accept, according to  ESPN.</p> <p>The Knicks, by acquiring Reddish, could be setting themselves up to make difficult roster choices down the road, but they do not have the same long-term financial commitments that the Hawks do. In a more immediate sense, the trade gives New York some needed athleticism on the perimeter, and it reunites Reddish with college teammate R.J. Barrett.</p>',
        ]);
        
        News::create([
            'category_id' => '1',
            'slug' => 'Why_the_Lakers_have...',
            'title' => 'Why the Lakers have to start reconsidering Russell Westbrook\'s role if this season is going to be salvaged',
            'excerpt' => 'The Lakers need to stop treating Westbrook as if he\'s still a superstar',
            'image' => 'https://sportshub.cbsistatic.com/i/r/2022/01/13/38e8435f-eeb5-4732-bae6-f05713e44237/thumbnail/770x433/c00b1b2f24c90f05ed24fe9a65f97238/westbrook-1.png',
            'body' => '<p>The Los Angeles Lakers had a real shot at overcoming a 13-point deficit on the road to defeat the Sacramento Kings Wednesday. They\'d managed to trim the lead down to four points with a little more than a minute to go. The game ultimately hinged on a two-possession swing. Kings forward Chimezie Metu made a 3-pointer to boost the lead to seven, but only after rebounding the miss of a player earning 30 times as much this season as he is.</p> <p>The precise nature of Russell Westbrook\'s loss-clinching miss hardly needs to be described because it\'s been such a common feature of his career. Westbrook dribbled out the bulk of the shot-clock before hoisting an ill-fated pull-up 3-pointer. Clank.</p> <p>It wasn\'t even the only such shot Westbrook missed in crunch time. Catch-and-shoot looks from the corner are slightly easier to swallow, but there\'s a reason the Kings left him so open. This is a shot every defender in the NBA wants Westbrook to take.</p> <p>There\'s an audacity that comes with taking shots like this when you\'ve started the game 2-of-12 from the field, but then, such outings are becoming increasingly frequent for Westbrook. After a miserable two-week stretch in which he averaged nearly six turnovers per game, Westbrook has exchanged one form of handing the ball to the other team for another. While he\'s turned the ball over just four times in his past four games, he\'s shot 15-of-59 from the field in the process. It\'s too early to speculate on whether or not that correlation equates to causation, but those ugly 3\'s don\'t exactly support the idea that Westbrook is going through some sort of identity crisis. If anything, it\'s quite the contrary. Westbrook is playing as if he\'s still a superstar, and perhaps more importantly, the Lakers are treating him as if he\'s still a superstar… but he\'s not still a superstar.</p> <p>Only a superstar gets to start a game 2-of-12 from the field and still gets to take the sort of shots that Westbrook was taking down the stretch. Generally speaking, only superstars can even stay on the floor when they\'re struggling that badly. Talen Horton-Tucker has played just seven clutch minutes all season, for instance. He is the fourth-highest-paid Laker, but he\'s generally abided by the standard that most NBA players are held to. Though he\'ll see the floor whenever he is healthy, extended playing time is earned on merit, and Horton-Tucker has struggled mightily for large stretches of this season. So has Westbrook. But Westbrook has made nine more All-Star Games than Horton-Tucker.</p> <p>That\'s a metric Frank Vogel tends to value, and that hasn\'t always been a negative trait. Vogel never wavered on Rajon Rondo\'s place in the 2020 rotation despite every number suggesting that he should. Rondo was a key part of the Lakers\' championship run in the Orlando bubble. That same approach backfired last season when Andre Drummond held on to a role he didn\'t earn until finally being benched in the very last game of the season. For better or worse and without knowing how much locker room politics play into it, Vogel trusts his veterans. It\'s just become clear that Westbrook isn\'t a particularly trustworthy player at this stage of his career.</p> <p>That\'s not to say he\'s been entirely bad. For stretches he\'s actually been quite good. But that\'s true of quite a few Lakers. Malik Monk was in and out of the rotation early in the season, but he\'s now averaging over 20 points per game since Christmas. Carmelo Anthony has been great at home and far worse on the road. This is what non-superstars tend to do. They play well some of the time and poorly the rest of it. That is where Westbrook is at this stage of his career, but his role doesn\'t reflect that. He hasn\'t played fewer than 30 minutes in any competitive game this season. He leads the NBA in clutch minutes and ranks fifth in clutch shot attempts.</p> <p>And with more than half of the season in the books, it\'s fair to start asking if that should be the case. None of this is necessarily meant to be taken to the extreme. Westbrook shouldn\'t be benched entirely. Whether he should even be demoted to a sixth man role is debatable, though given his easier fit with the shooters on the Laker bench, it\'s a reasonable position. No, the simple solution here is to treat Westbrook like any other player. Rather than handing him minutes based on his reputation, he should earn them with his play.</p> <p>Westbrook didn\'t play well in Sacramento on Wednesday. Perhaps the outcome would have been different if the Lakers had closed with someone else in his place. We\'ll never know, but it should be a learning experience for the team. The next time Westbrook starts a game 2-of-12 from the field, it would probably be best not to let him miss shots No. 13 and 14.</p>',
        ]);
        
        News::create([
            'category_id' => '3',
            'slug' => 'Athletes_with_bigger_bottoms...',
            'title' => 'Athletes with bigger bottoms reach higher sprint speeds, study finds',
            'excerpt' => 'Larger gluteus maximus muscle improves performance, research suggests',
            'image' => 'https://www.justrunlah.com/wp-content/uploads/2017/05/Running.jpg',
            'body' => '<p>Athletes with a larger bottom are able to reach higher running speeds, a study has found. </p> <p>Researchers examining the anatomy of elite athletes found those with a bigger gluteus maximus - the muscle that forms the bottom - enjoyed an improved track performance.</p> <p>The study revealed that the size of a number of muscles relate to the time it takes sprinters to run 100 metres, with the gluteus maximus explaining 44 per cent of the variability in performance.
        </p> <p>Experts found that for top sprinters, some muscles, such as hip extensor muscles, were far bigger compared to sub-elite sprinters, but others were similar, such as calf muscles.</p> <p>Previous research has found that the growth of the gluteus maximus muscle was a key factor in the evolution of early human running capabilities.</p> <p>Rob Miller, a PhD student at Loughborough University and a strength and conditioning coach with British Athletics, and Professor Jonathan Folland, an expert in neuromuscular performance, used a magnetic resonance imaging (MRI) to measure the size of 23 lower body muscles in 42 men - five elite sprinters, 26 sub-elite and 11 untrained men.</p> <p>Among the elite and sub-elite sprinters there was variability in performance with 100 metre personal bests that ranged from 9.91 to 11.25 seconds.</p> <p>The researchers found the gluteus maximus was 45 per cent bigger in elite sprinters than sub-elite sprinters.</p> <p>Prof Folland said: "This is surprising because sprinting is thought to be influenced by many factors - technique, psychology, nutrition, anatomy of other structures - so to find a single muscle that alone seems so important, explaining nearly half the variability, is remarkable.</p> <p>"It appears that muscle size is more important for fast running than we thought and especially the size of the hip extensors and gluteus maximus."</p> <p>He added: "The logical implication is that with a larger gluteus maximus the runner will be able to generate more power and therefore greater sprint speed.</p> <p>"Thus, increasing the size of the gluteus maximus in particular, as well as the other hip extensor muscles, would be expected to improve sprint performance." </p>',
        ]);
        
        News::create([
            'category_id' => '3',
            'slug' => 'Trinidad_&_Tobago_Olympic_400m_relay..',
            'title' => 'Trinidad & Tobago Olympic 400m relay medallist Deon Lendore dies in car crash',
            'excerpt' => 'Trinidad and Tobago sprinter and Olympic relay bronze medal winner Deon Lendore has died in a car accident.',
            'image' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/trinidad-and-tobagos-deon-lendore-reacts-after-taking-news-photo-1642074677.jpg',
            'body' => '<p>Trinidad and Tobago sprinter and Olympic relay bronze medal winner Deon Lendore has died in a car accident.</p> <p>The 400m runner won bronze in London 2012 as the anchor in the 4x400 men’s relay. With a PB of 44.36, Lendore also represented Trinidad & Tobago at Rio 2016 and recently competed in Tokyo 2020.</p> <p>As well as Olympic bronze, Lendore won silver in the 4x400m at the 2015 IAAF World Athletics Championships, as well as winning individual bronze at the 2016 World Indoors in Portland.</p> <p>The former NCAA champion at Texas A&M was returning from the university where he serves as a volunteer assistant coach when he was involved in the accident on 10 January.</p> <p>\'He epitomised hope and joy each time his feet landed on the track,\' said Trinidad Minister of Sport and Community Development, Shamfa Cudjoe.</p> <p>\'He was indeed a trailblazer, a life gone too soon. We thank him for everything he has done and for giving distinguished and diligent service to TT.\'</p>',
        ]);
        
        News::create([
            'category_id' => '5',
            'slug' => 'Tze_Yong,_Sirant_in_Maiden_Super_500_Quarters',
            'title' => 'Tze Yong, Sirant in Maiden Super 500 Quarters',
            'excerpt' => 'Malaysia’s Ng Tze Yong and Russia’s Sergey Sirant made the quarterfinals of their first HSBC BWF World Tour Super 500 event in contrasting styles at the YONEX-SUNRISE India Open 2022.',
            'image' => 'https://bwfworldtour.bwfbadminton.com/wp-content/uploads/2022/01/3-IO_Ng-Tze-Yong2-980x550.jpg',
            'body' => '<p>Malaysia’s Ng Tze Yong and Russia’s Sergey Sirant made the quarterfinals of their first HSBC BWF World Tour Super 500 event in contrasting styles at the YONEX-SUNRISE India Open 2022.</p> <p>While Ng fell behind early against Lucas Claerbout and pulled through only at the end of the 77-minute match, Sirant needed just 39 minutes against Finland’s Kalle Koljonen.</p> <p>“I feel quite surprised that I can make the quarterfinals because this is my first Super 500 tournament,” said the 21-year-old Ng. “I had a lead in the first game but then I lost focus so it was a tough match.”</p> <p>The Malaysian had worked himself into form at lower-rung tournaments in 2021 – winning the Polish Open, the Belgian International and Scottish Open, and said he’d gained confidence from his performance at the Thomas Cup where he went down to Jonatan Christie in three games.</p> <p>“Last year I felt I needed to play some smaller tournaments so I could learn more. I got a lot of confidence playing Jonatan Christie at the Thomas Cup, because that was the first I played a top 10 player. This year I hope to make the top 30 so I can play more higher level events like the Super 1000s. I feel very good because after the Europe tournaments I didn’t take a holiday and I kept training.”</p> <p>Like Ng, Sergey Sirant too made the quarterfinal at his first Super 500 event and was thrilled.</p> <p>“This is my first Super 500 quarterfinal and it’s good for me and I’m very happy. I’m very comfortable playing in India. I don’t have strong sparring at home but the motivation is high.”</p> <p>In the quarterfinals, Sirant faces Loh Kean Yew while Ng Tze Yong takes on Nhat Nguyen.</p>',
        ]);
        
        News::create([
            'category_id' => '5',
            'slug' => 'Loh’s_Milestone_for_Singapore',
            'title' => 'Loh’s Milestone for Singapore',
            'excerpt' => 'Loh Kean Yew became the first Singaporean to medal at the World Championships with a comprehensive defeat of HS Prannoy in the quarterfinals of the TotalEnergies BWF World Championships 2021.',
            'image' => 'https://bwfworldchampionships.bwfbadminton.com/wp-content/uploads/2021/12/Qts_Loh-Kean-YewWC-980x550.jpg',
            'body' => '<p>Loh Kean Yew became the first Singaporean to medal at the World Championships with a comprehensive defeat of HS Prannoy in the quarterfinals of the TotalEnergies BWF World Championships 2021.</p> <p>The world No.22 mixed his game well, alternating attacking shots with softer, well placed drops and an inventive net game to keep his Indian opponent unable to work up any rhythm. The 21-14 21-12 result gave him a semifinal against third seed Anders Antonsen, whose quarterfinal opponent Lee Zii Jia retired in the third game with a blister in his right foot.</p> <p>“He played really well. I thought I played well but I couldn’t score a lot of points as he was defending well,” said Prannoy. “He kept his speed up the entire game. Last night’s match probably took away a lot of energy and I probably couldn’t push as much as I’d have liked.”</p> <p>“Happy!” said Loh. “I didn’t think I’d get a medal so soon. But the job is not done yet, I have to focus on my next match. The key was to be aggressive and patient at the same time. It’s going to be a long game against Anders tomorrow, I’m excited.</p> <p>“I’m happy I got a medal for Singapore, but I can’t be too happy with the semifinal coming up.”</p>',
        ]);
        
        News::create([
            'category_id' => '6',
            'slug' => '\'He\'s an anomaly\': Dominguez turning heads',
            'title' => '\'He\'s an anomaly\': Dominguez turning heads',
            'excerpt' => 'Jasson Dominguez is regarded as one of the most celebrated Minor League prospects in recent memory, with sky-high expectations accompanying his professional debut this past season. In Yankees general manager Brian Cashman’s view, the switch-hitting wunderkind lived up to the hype.',
            'image' => 'https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2022/01/931/524/GettyImages-1341676780.jpg',
            'body' => '<p>Jasson Dominguez is regarded as one of the most celebrated Minor League prospects in recent memory, with sky-high expectations accompanying his professional debut this past season. In Yankees general manager Brian Cashman’s view, the switch-hitting wunderkind lived up to the hype.</p> <p>Dominguez played in seven games for a Rookie-ball team before jumping to Low-A Tampa, where he batted .258/.346/.398 with nine doubles, a triple, five homers and 18 RBIs in 49 games. Cashman said that he believes only a select group of prospects would be capable of handling a similar jump to a full-season league as an 18-year-old.</p> <p>“His work ethic is exceptional; his will to be successful is exceptional,” Cashman said recently. “When you engage all the departments, whether it’s player development, performance science, the measurables that come along with it -- he’s basically an anomaly, something that doesn’t come along very often.”</p> <p>A product of the Dominican Republic, Dominguez received a $5.1 million signing bonus from the Yankees in July 2019, which was all but $300,000 of the club’s bonus pool and a franchise record for an international amateur.</p> <p>Rated as the Yankees’ No. 2 prospect by MLB Pipeline, the switch-hitting speedster has generated comparisons to some of the greatest athletes in baseball history, like Bo Jackson, Mickey Mantle and Mike Trout.</p> <p>“There’s a lot of very talented people, and he has a higher level of degree and talent than most,” Cashman said. “If he can obviously put that together and match that to his performance level, you’re going to be talking about something very special.”</p> <p>Kevin Reese, who was recently promoted to vice president of player development, said that the Yankees organization is “extremely excited” about getting Dominguez back on the field to continue his march toward the big leagues.</p> <p>“Everywhere he goes, he’s turning heads,” Reese said. “His ability to connect with people, his ability to lead at such a young age, the exit velo, the speed. Some of the measurables that we do on our performance science side, it’s all off the charts. We just want to get him to play more baseball; I think all of the skill is there, all of the ability is there.”</p> <p>Reese said that the Yankees have not yet decided where Dominguez will begin the season. He’ll likely be playing for Low-A Tampa, where the club recently named Rachel Balkovec as the first female manager in affiliated professional baseball. Balkovec worked with Dominguez as a hitting coach in the Florida Complex League last season.</p> <p>“I think the conversation very much is, ‘OK, he can hit the ball hard. We all know that,’” Balkovec said. “But I think that once people understand the kind of person he is -- he’s a phenomenal person in the clubhouse. His aptitude is so high. He wants to learn. We’re literally doing offseason English classes right now. He and I aren’t even talking much about baseball.</p> <p>“We’re talking about English classes so he can be a better person in the clubhouse, be a leader for both Latin American and American players in his future. Everyone knows his baseball talent, that’s obvious, but behind closed doors people need to understand it’s a really special person. What he brings to the clubhouse from a character standpoint is phenomenal.”</p>',
        ]);
        
    }
}
