-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2019 at 09:07 PM
-- Server version: 5.5.60-log
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featured` int(11) NOT NULL DEFAULT '0',
  `home` int(11) NOT NULL,
  `blogcategories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `excerpt`, `href`, `featured`, `home`, `blogcategories`) VALUES
(1, 'Six Reasons New Business Owners Should Incorporate', 'http://localhost/menu/images/blog/office.jpg', 'Among the many decisions you need to make as a new business owner, one is choosing the business structure for your company. You may think simple is better—especially when you’re feeling overwhelmed with all there is to do to launch your business. As someone who has started several businesses, I understand why traveling the least complicated path may look most inviting. But taking the easy way out could put you at a disadvantage.\r\n\r\nIf you don’t take measures to file to operate your company as a formal legal entity, you will by default operate as a sole proprietorship (or general partnership if more than one owner). This is the most uncomplicated way to run a business, but it shortchanges you from the important advantages you’ll reap if you instead incorporate or form a Limited Liability Company (LLC).\r\n\r\nWhy is it better to incorporate or form an LLC for your startup?\r\n\r\n1. Limit Your Personal Liability.\r\n\r\nIf anything can make you sleep better at night, it’s the peace of mind your personal assets are protected in the event something goes wrong in your business. A corporation is recognized as a separate legal entity from its owners, therefore business liabilities and debts are the responsibility of your company not you personally. So, in the event someone would bring suit against your business, your personal assets (like your vehicle, home, personal savings account, etc.) will be insulated. As an LLC, you also gain personal liability protection, although it’s less extensive than with a corporation.\r\n\r\n2. Boost Your Credibility.\r\n\r\nBy having “Inc.” or “LLC” added to the end of your business name, customers may see you as more legitimate and trustworthy. This could mean the difference between prospects doing business with you or choosing a competitor.\r\n\r\n3. You May Discover Tax Advantages.\r\n\r\nAs a corporation, you may be eligible for tax deductions not available to sole proprietorships or partnerships.\r\n\r\nSome small business owners find the LLC’s “flow through taxation” an appealing option instead. As an LLC, your business’s profits and losses pass through to your personal income tax return. This may be a good fit if you wish to offset your personal income tax liability with business losses.\r\n\r\nAn attorney/tax professional would be able to assist you in deciding which business structure will benefit you most from a tax perspective.\r\n\r\n4. You Can Have Multiple Owners.\r\n\r\nGenerally, LLCs and corporations (with the exception of S Corporations) don’t limit how many owners/members/shareholders you may have.\r\n\r\n5. If It’s a Corporation, Your Business Can Live On.\r\n\r\nBecause it’s a separate legal entity that exists in its own right, a corporation has the advantage of a perpetual life. The ownership shares of the business can be sold, bequeathed, or otherwise given to others. So, if an owner or shareholder dies or leaves the business, the corporation may continue to exist. A corporation exists until articles of dissolution are filed to close it.\r\n\r\n6. If It’s a Corporation, You Have More Funding Capabilities.\r\n\r\nAs a corporation, your company may sell equity to raise money for your business. This can be a huge advantage if you want to grow and expand your company. C Corporations allow for an unlimited number of shareholders and multiple classes of stock, and S Corporations allow you to have up to 100 shareholders and sell one class of stock. ', 'http://www.secretentourage.com/entrepreneur/six-reasons-new-business-owners-should-incorporate-or-form-an-llc/', 1, 2, 2),
(2, 'How to Grow Wealth And Enjoy Life Along the Way', 'http://localhost/menu/images/blog/wealth.jpg', 'If you had a choice, would you choose to: A) live wealthy today, or B) live wealthy 20 to 30 years down the road?\r\n\r\nIt’s a serious question. Because many people are pressured into choosing option B when they absolutely don’t have to. Living wealthy now is a choice.\r\n\r\nBut sometimes it feels like the whole world is conspiring to keep people from living wealthy today. “Do you know how much money you need to retire?” they ask. “Are you on track with your savings goals?” they ask.\r\n\r\nThis is the accumulation game. It’s based on the faulty idea that you can shrink your way to wealth. If you just cut back on lattes and cook all your meals at home, you’ll save more money. And eventually, 30 years down the road when you retire, you can live off your savings (at a fraction of your current lifestyle). This is definitely not how the world’s wealthiest families did it.\r\n\r\nI used to play this game. And on the rare occasions that I’d take my wife to dinner, I’d pester her with scarcity thinking. I’d tell her, “No, honey. You can’t have that glass of wine,” as I pulled out a calculator. Then I’d say to her in all seriousness, “$10, after 30 years of compounding interest at 10%, is $198.37. Do you really want to pay $200 for that glass of wine?”\r\n\r\nThat’s how retirement planners want you to think about saving, because they want your money, they want it now and they want it for 30 years or more.\r\n\r\nIt’s the perfect recipe for delaying wealth until some day decades down the line (if ever). Fortunately, my entrepreneurial-side helped me finally see through the charade. I call it “The Entrepreneur’s Advantage,” although you don’t have to be an entrepreneur to capitalize on it.\r\n\r\nEntrepreneurs have an instinctual understanding of cash flow. It’s the lifeblood of our business. The #1 most important thing is to make sure you have positive cash flow — i.e. more money flowing in than flowing out.\r\n\r\nWe don’t want to save a pile of money to spend down in retirement (hoping to die before it runs out), because that’s the definition of insolvency.\r\n\r\nThe entrepreneur’s advantage tells us to focus on positive cash flow and growing wealthier each month, because that’s the secret to living wealthy today and tomorrow. \r\n\r\nThen, over the long term, the key is to keep the cash flow flowing in retirement.', 'http://www.secretentourage.com/motivation/how-to-grow-wealth-month-after-month-and-enjoy-life-along-the-way/', 1, 2, 3),
(3, 'Secret Academy Episode - Andrew Weinreich', 'http://localhost/menu/images/blog/andrew.jpg', 'Andrew Weinreich is the definition of a serial entrepreneur. Not only does he have 7 startup companies and 2 patents under his belt, but he has now single handedly created an unparalleled educational bootcamp called “Andrew’s Roadmaps”. \r\n\r\nAndrew’s Roadmaps is the brainchild of a man who hasn’t left the game of Technological Entrepreneurship since 1995, when Weinreich founded the first ever social media platform, Six Degrees. Followed by companies such as MeetMoi and Xtify, Weinreich realized that he had a passion for the startup aspect of entrepreneurship. \r\n\r\nBuilding on his passion, Weinreich has taken Andrew’s Roadmaps all over the United States, helping thousands of startup founders develop every aspect of their business through his own practices and curriculum that challenges everything you thought you knew about entrepreneurship.', 'http://www.secretentourage.com/academy/andrew-weinreich/', 1, 2, 2),
(4, 'An Entrepreneur Takes on the World of Finance', 'http://localhost/menu/images/blog/business.jpg', 'I came from a small coal mining town and from a long line of coal miners. In fact, my father, both grandfathers and all great-grandfathers worked at the local coal mine. So growing up, it felt like my family history was staring me in the face, daring me to try something different.\r\n\r\nSo my plan was to end the family line of coal miners (which my parents encouraged) and go into business as soon as possible (which scared my parents to no end). That meant starting my first business at age 15 and winning a Young Entrepreneur of the Year Award from both the state of Utah and the Small Business Administration.\r\n\r\nThat meant going away to college to make the connections I couldn’t make in my small hometown–even leaving behind the full-ride scholarship my local junior college offered me. And that meant getting my Series 6 Securities License plus Life and Health Insurance certifications before I even graduated.\r\n\r\nIn fact, I even signed up some of my professors as my first clients.\r\n\r\nI was bright-eyed, confident, and ready to take the financial industry by storm. But then it happened. I quickly realized that something felt off about the financial industry.\r\n\r\nAs a born entrepreneur, the financial products I was selling didn’t fit what I knew about building value and wealth. For example, Warren Buffett recently said, “If you own your stocks as an investment, look at them as a business.”\r\n\r\nBut if the 401(k) was a business, it’d be the last business I’d stick my money into.\r\n\r\nTake a look: 401(k)s are investment accounts created by the government. But, were they created to help you, or to help the financial industry?\r\n\r\nLet’s see if we can come to the same conclusion with 4 simple questions.\r\n\r\nQ: What does the financial industry want?\r\n\r\nA: Your money.\r\n\r\nQ: How often do they want it?\r\n\r\nA: Every time you pay yourself or get a new paycheck.\r\n\r\nQ: How long do they want your money?\r\n\r\nA: As long as possible, 30-40 years, or even your entire life would be ideal.\r\n\r\nQ: How often do they want to give your money back?\r\n\r\nA: As rarely as possible, so penalties and taxes are welcome.', 'http://www.secretentourage.com/motivation/an-entrepreneur-takes-on-the-world-of-finance/', 1, 0, 4),
(5, 'Secret to Success - David Lee', 'http://localhost/menu/images/blog/DavidLeeCover.jpg', 'After working with his father and learning the industry David was able to open his own jewelry store and help build and grow the business his family started. This helped to kick off his entrepreneurial career. From there David was able to start investing in real estate and expand his portfolio. His passion for investing and cars lead him into the world of car collecting. Today David owns one of the most impressive car collections there is (specifically Ferrari), . His garage holds models ranging from the 288 GTO to the latest LaFerarri, with a lot of others in between.\r\n\r\nIt started off just as a sharing idea but then it just evolved into a very fast growth of followers completely organically. I felt, at some point, that I could use it to help people. I took that approach to help people, to teach people, to encourage people, to inspire people. So, itâ€™s really a glimpse of my life. Thatâ€™s really what I use social media for. \r\n\r\nIn the last couple of years as things evolved, I have become involved with USC more, I teach entrepreneurship as a guest teacher. From their social media accounts, Iâ€™m starting to understand young people a little bit more. I feel that there are many values that are lost in todayâ€™s people. I mean, yes, the environment has changed with the Millennial generation. Itâ€™s different than Generation X or even the Baby Boomers, but I think there are some values that are missing that I think would help the Millennial generation to be able to succeed, and so maybe itâ€™s a little bit kind of a role that I wanted to play to try to influence the world to be a better world. To influence the world to certain proper values, a lot of people would say old-school values â€“ proper values â€“ that can make you a better person, to be a successful person. \r\n\r\nFor me, my mentor was my father. Our conversations and communication was always focused on him teaching me something. He was old-school so thatâ€™s how he showed his love â€“ itâ€™s the only way he knew. I got the benefit of learning a lot on how to fit into this world, how to do business, and so forth. ', 'http://www.secretentourage.com/success-stories/david-lee/', 1, 0, 1),
(6, '5 Ways to Balance Being an Entrepreneur with Having a Relationship', 'http://localhost/menu/images/blog/health.jpeg', 'There are many blogs, books, and videos discussing how to be a successful entrepreneur, create work/life balance or how to keep a job while being an entrepreneur. But there are fewer outlets which address how to balance being an entrepreneur and have a relationship, at the same time. Note: Entrepreneurs can be men or women and for this article I’ll be using both genres interchangeably.\r\n\r\nThere is a thin line in which entrepreneurs can find themselves sitting on when trying to figure out how to include or maintain a relationship in their daily life as an entrepreneur. After all, being an entrepreneur is a lifestyle that is with you 365 days a year and it never turns off. Even when you have a dedicated team of effective and competent people working for you, you’re still the boss and the decision maker. You can’t just “disconnect” for any amount of uncertain time and you are in essence married to your work. You work is your life and you are your work. The two cannot be separated.\r\n\r\nThe entrepreneur side of your life is who you love the most with all of its intricacies. But there is another side to you which longs for companionship or someone to share a life and build with. Yet, you know that being in a relationship you have to be mindful of its commitments if you want to keep it.\r\n\r\nBeing an entrepreneur takes a lot of work. Relationships take a lot of work. Both require full time commitment, and patience if you want to see it become successful and last.\r\n\r\nSo how does one balance being an entrepreneur with having a relationship at the same time?\r\n\r\nHere are 5 ways to help you unlock methods to help you figure it out.\r\n\r\n1) Be honest about your needs upfront.\r\n\r\nHow many times have you had to change the plans on previously planned events with your mate? Have you had to cancel yet another date because there were things which came and you’re hoping she’ll understand or better yet still be available when you’re available?\r\n\r\nIf you’re experiencing this or anything similar, it’s possible to trace it back to not fully stating what you need or not updating what you need as things change. It’s easy for one to take for granted that his mate just knows who he is. Besides, you may assume your partner should know what’s going on, handle it, and be able to figure it out without you needing to explain things or complain about it.\r\n\r\nYet, sometimes entrepreneurs expect their mate to read context clues without necessarily asking for a verbal understanding of what’s needed. Being honest upfront about what you need is one of the best ways to ensure your relationship can survive when things change, because things will change.\r\n\r\n2) Disconnect and be present in the moment.\r\n\r\nIs this you?\r\n\r\nYou wake up with your phone. You go to bed with your phone. You wake up throughout the night and check your phone. You text, email, surf the internet, make post to social media, check voicemails or you’re always making deals no matter where you are and what time of day it is. You never turn your devices off, you’re never without them and it seems like everyone has 24-hour access to you.\r\n\r\nAs technology expands, we have more information available at our finger tips. So we are naturally inclined to want to stay connected in real time. You’re probably thinking “This is the best way to stay on top of the game and ahead of my competition!” Yes, there is some truth in this, but at what price are you paying by missing out on moments you can never get back?\r\n\r\n3) Make your Significant Other #1\r\n\r\nDisconnecting and being present in the moment brings me to number three. Make your significant other numeral uno!\r\n\r\nYes, you’re busy and in demand. Yes, the business and clients constantly pull at you. You have multiple deadlines to meet, projects to see about and money to generate. You also have your own personal things you like to do which you may rarely find time to do.\r\n\r\n4) Stay Connected by Showing Appreciation & Have Sex Regularly!\r\n\r\nWhen a person is praised and shown appreciation, they tend to do more and go above what is requested of them for those they love on a consistent basis. Praise your partner with words of affirmation verbaly, on little sticky notes or via text messages. Recognize your significant other for maintaining the home, caring for your parents, handling the bills or simply sticking it out with you on your journey.\r\n\r\nAnd what better way to say “thank you” or “I love you” than with random hugs, intimate touching and of course, sex! Create ways to have uninterrupted, unplanned intimate moments at different times as your schedule allows. Schedule lunch dates during the day when the children are at school or at the sitter’s house. Check into a hotel with your partner nearby the business if you have to drive far to get home and back to the office in a timely manner. You’re the boss! Call in “sick” and take some time off and reconnect with your partner. Do this regularly and you will not only balance your relationship, you will also be able to find balance in your life!\r\n\r\n5) Communication! Communicate often and reassuringly.\r\n\r\nCommunication builds trust.\r\n\r\nThe number one reason for divorce and failed relationships is due to lack of communication or the inability to communicate effectively with understanding. Over time poor communication breeds mistrust and resentment and it can ruin a relationship in seconds, which may have taken years to build.\r\n\r\nFrequent communication can lay the perfect foundation for having a balanced relationship. When the communication occurs frequently, it can expand your partner’s trust in you with his or her emotions while you’re away or when things come up and you need to be understood.\r\n\r\nReassuring communication doesn’t mean texting every little nuisance that may occur or “checking in” so to speak. It does however mean you take responsibility to touch base with your mate so they stay connected to you. You can do this through text messages or short phone calls once or twice a day. A random “Hello handsome.” or “I miss you beautiful.” can go a long way and turn into something magical when you get home and over time.\r\n\r\nTake note if your partner is having a rough day. Make your words more gentle than usual. Be the listener and listen intently, ask questions or just let your mate vent.', 'https://www.secretentourage.com/lifestyle/5-ways-to-balance-being-an-entrepreneur-with-having-a-relationship/', 0, 0, 4),
(7, '7 Steps to Help You Achieve Your New Years Resolutions by 2019', 'http://localhost/menu/images/blog/goals.jpg', 'Step 1 – Create a Positive Vision of the Future\r\n\r\nWhen going on a road trip, before you can find the directions to get to where you are going, you’re going to have to know exactly where you want to arrive at first, does that make sense?\r\n\r\nWhen setting goals for yourself, the part of your brain that is programmed to bring things into our awareness does not process a negative. If you focus on what you’re running away from (or what you don’t want), this will bring more of those things into your awareness.\r\n\r\nStep 2 – Why Do You Want It?\r\n\r\nWhile the positive vision of the future is the work you’ll channel your energy into. Your WHY is the energy that fuels the fire.\r\n\r\nWhy do I want to build a large business that helps first-time entrepreneurs get motivated and trained to start and grow their business? Why do I want to publish a book on men’s personal development?\r\n\r\nTo be honest, I want to be in the position to provide for a woman that I choose to be my life partner, and be able to do anything we want to do in life together. If she wants to travel to Dubai to go Skydiving on a weeks’ notice, live in a certain house, or do whatever she wants to do; the love I feel for the woman I choose to be with is the thing that lights the fire in my heart to make this possible for me…and for her.\r\n\r\nBut that’s just me. Just typing up that paragraph above brings up an emotion that is a twelve-out-of-a-ten on a scale of intensity.\r\n\r\nWhat brings up the emotions within you?\r\n\r\nDo you want to prove to the haters that they were wrong about you? Do you want that sense of admiration and recognition/fame?\r\nAccomplishment and Growth?\r\nContribution?\r\n\r\nStep 3 – What Habits/Actions/Behaviors do you have to STOP doing?\r\n\r\nGrowing up, my mother told me to eat my vegetables. The way she got me to eat my broccoli and green beans was to slather them up with copious amounts of butter and salt to make them taste good.\r\n\r\nDoesn’t that defeat the purpose of eating healthy?\r\n\r\nWhile most people focus on what they want to START doing, those of us who are serious about accomplishing our goals in the new year really take a hard look at what we need to STOP doing.\r\n\r\nI need to stop checking instagram every 30 minutes.\r\n\r\nStep 4- Chunk it Down to Avoid Overwhelm\r\n\r\nWhen we focus on our big goal, so many thoughts and emotions come up to the point where we feel overwhelmed and get stuck in our tracks.\r\n\r\nWhen we take our larger goal and break it down into one very specific actionable step, this leads us with the focus and clarity we need. When we mix this with our WHY (the emotions from #2), and use that to fuel the fire into one focused step, these small steps add up over time.\r\n\r\nWHY will doing this ONE task lead you to feeling the emotions of the goal you set out for yourself in #1, providing you the emotions you want in #2?\r\n\r\nStep 5 – Become an Expert in Human Behavior\r\n\r\nWhile most people try to be motivated by pumping themselves up with feel-good emotions from instagram posts of cars or motivational YouTube video; that only leads to getting addicted to feel-good emotions (and not doing anything). The ones who truly master the art of accomplishing their goals become an expert in understanding, taking control of, and mastering the science of human behavior.\r\n\r\nI did so by becoming certified as an NLP Practitioner.\r\n\r\nIf you set one specific step to accomplish today, hand a trusted friend a check for $100 and he gets to cash it if you don’t complete that task today…would the pain you feel from losing the $100 motivate you to push yourself into action?\r\n\r\nStep 6 – Embrace the Flow State\r\n\r\nWhen we focus on what we do want, the selective focus in our brain unconsciously and automatically begins to spot opportunities and people in our life that are aligned with our goals.\r\n\r\nIn 2015 when I spent 5 months living in Scottsdale, Arizona, I was on the phone with my mother who asked what types of flowers were along the trail I was walking on. I looked up and the trail was filled with flowers that I never noticed before.\r\n\r\nMy mind was focused on marketing and advertising, so I was too busy automatically seeing signs for marketing everywhere. That’s what I wanted to focus on.\r\n\r\nStep 7 – Detach from Outcome\r\nI lost 50 pounds the other year.\r\n\r\nDid I try to lose 50 pounds? No.\r\n\r\nI literally just woke up every morning, climbed a mountain for 2-3 hours, got a coffee on the way back home and did intermittent fasting until noon as I wrote chapters for my book.\r\n\r\nI didn’t care about the outcome, because the goal for me was not the outcome after-all. It was by shifting the focus from the outcome I wanted to achieve, to the tasks I wanted to do.\r\n\r\nLosing weight turned into climbing mountains.\r\n\r\nBeing a best-selling author turned into writing the chapter on overcoming nervousness and anxiety.\r\nGetting in the relationship turned into going out to different meet up groups.\r\n\r\nWhen you enjoy the tasks you are doing, and make that the focus, eventually the results will come. As long as you follow sound business advice and focus your efforts in the right areas.', 'https://www.secretentourage.com/motivation/how-to-achieve-your-new-years-resolutions-by-2019/', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `blogcategories`
--

CREATE TABLE `blogcategories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogcategories`
--

INSERT INTO `blogcategories` (`id`, `category`, `href`, `parent`) VALUES
(1, 'Success Stories', 'http://localhost/menu/pages/blog/blog-success-stories.php', 0),
(2, 'Entrepreneur', 'http://localhost/menu/pages/blog/blog-entrepreneur.php', 0),
(3, 'Motivation', 'http://localhost/menu/pages/blog/blog-motivation.php', 0),
(4, 'Lifestyle', 'http://localhost/menu/pages/blog/blog-lifestyle.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_title` varchar(150) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `last_post_date` datetime DEFAULT NULL,
  `last_user_posted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_title`, `category_description`, `last_post_date`, `last_user_posted`) VALUES
(1, 'Business Ideas', 'Talk about business opportunities', '2019-02-06 22:12:03', 3),
(2, 'Career Advice', 'Leadership, corporate america, etc', '2019-02-06 00:49:09', 1),
(3, 'Websites And Apps', 'For you webmasters and programmers', '2019-02-05 23:38:08', 4),
(4, 'Mindset And Motivation', 'Share motivational tips with each other', '2019-02-05 23:37:20', 4),
(7, 'Success Stories', 'Share success stories that are inspiring', NULL, NULL),
(8, 'General Networking', 'Share your social accounts and more', '2019-02-05 23:38:48', 4),
(11, 'New Member Introductions', 'Come on in and introduce yourself', NULL, NULL),
(12, 'Lifestyle & Fun', 'Cars, watch, travel, good eats, and more!', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `applicant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `topic_id`, `applicant`) VALUES
(1, 1, 2, 2),
(2, 4, 3, 2),
(3, 4, 6, 2),
(4, 1, 5, 4),
(5, 4, 6, 4),
(6, 3, 4, 1),
(7, 4, 3, 3),
(8, 1, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ecommerce`
--

CREATE TABLE `ecommerce` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featured` int(11) NOT NULL DEFAULT '0',
  `ecommercecategories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ecommerce`
--

INSERT INTO `ecommerce` (`id`, `title`, `image`, `price`, `description`, `href`, `featured`, `ecommercecategories`) VALUES
(1, 'SE Keychain', 'http://localhost/menu/images/ecommerce/keychain.jpg', 12, 'SE 100% Carbon Fiber License Plate Frame', 'http://www.secretentourage.com/images/customimages/academy/clubhouse/keychain.jpg', 1, 1),
(2, 'SE Branded Mug', 'http://localhost/menu/images/ecommerce/se-mug.jpg', 25, 'SE 100% Carbon Fiber License Plate Frame', 'http://www.secretentourage.com/images/customimages/academy/clubhouse/se-mug.jpg', 1, 1),
(4, 'Entrepreneurship\r\nPoster', 'http://localhost/menu/images/ecommerce/poster-entrepreneurship.jpg', 29, '', 'http://www.secretentourage.com/images/customimages/academy/clubhouse/poster-entrepreneurship.jpg', 1, 2),
(5, 'Greatest Success\r\nPoster', 'http://localhost/menu/images/ecommerce/poster-greatest-success.jpg', 29, '', 'http://www.secretentourage.com/images/customimages/academy/clubhouse/poster-greatest-success.jpg', 1, 2),
(6, 'You Can\r\nPoster', 'http://localhost/menu/images/ecommerce/poster-you-can.jpg', 35, '', 'http://www.secretentourage.com/images/customimages/academy/clubhouse/poster-you-can.jpg', 1, 2),
(7, 'Build Your Dream\r\nPoster', 'http://localhost/menu/images/ecommerce/poster-build-your-dream.jpg', 39, '', 'http://www.secretentourage.com/images/customimages/academy/clubhouse/poster-build-your-dream.jpg', 1, 2),
(8, 'One SE Sticker', 'http://localhost/menu/images/ecommerce/one-sticker.jpg', 3, '', 'http://localhost/menu/images/ecommerce/one-sticker.jpg', 1, 1),
(9, 'Two SE Stickers', 'http://localhost/menu/images/ecommerce/two-stickers.jpg', 5, '', 'http://localhost/menu/images/ecommerce/two-stickers.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ecommercecategories`
--

CREATE TABLE `ecommercecategories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ecommercecategories`
--

INSERT INTO `ecommercecategories` (`id`, `category`, `href`, `parent`) VALUES
(1, 'Accessories', 'http://localhost/menu/pages/club-house/club-house-accessories.php', 0),
(2, 'Posters', 'http://localhost/menu/pages/club-house/club-house-posters.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `featured` tinyint(11) NOT NULL DEFAULT '0',
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `interviews`
--

INSERT INTO `interviews` (`id`, `title`, `categories`, `image`, `description`, `featured`, `href`) VALUES
(1, 'Jesse Itzler', 4, 'http://localhost/menu/images/interviews/jesse.jpg', 'Founder Of The 100 Mile Group', 1, 'http://www.secretentourage.com/academy/jesse-itzler/'),
(2, 'Cameron Herold', 8, 'http://localhost/menu/images/interviews/cameron.jpg', 'Founder of COO Alliance', 1, 'http://www.secretentourage.com/academy/cameron-herold/'),
(3, 'David Lee', 4, '/menu/images/interviews/david.jpg', 'CEO Of Hing Wa Lee Group', 1, 'http://www.secretentourage.com/academy/david-lee-ferrari-collector/'),
(4, 'Andrew Weinreich', 4, 'http://localhost/menu/images/interviews/andrew.jpg', 'Founder of Andrew Roadmaps', 1, 'http://www.secretentourage.com/academy/andrew-weinreich/'),
(6, 'Maz Jobrani', 7, '/menu/images/interviews/maz.jpg', 'World Famous Comedian', 1, 'http://www.secretentourage.com/academy/maziyar-jobrani/'),
(7, 'Tom Bilyeu', 7, 'http://localhost/menu/images/interviews/tom.jpg', 'Co-founder Of Quest Nutrition', 1, 'http://www.secretentourage.com/academy/tom-bilyeu/'),
(8, 'Ryan Blair', 10, 'http://localhost/menu/images/interviews/ryan.jpg', 'CEO of ViSalus', 1, 'http://www.secretentourage.com/academy/ryan-blair/'),
(9, 'Kevin Harrington', 8, 'http://localhost/menu/images/interviews/kevin.jpg', 'CEO of Kevin Harrington Enterprises', 1, 'http://www.secretentourage.com/academy/kevin-harrington/'),
(10, 'Patrick Bet-David', 2, 'http://localhost/menu/images/interviews/patrick.jpg', 'CEO of PHP Agency', 1, 'http://www.secretentourage.com/academy/patrick-bet-david/'),
(11, 'Chris Stoikos', 11, 'http://localhost/menu/images/interviews/chris.jpg', 'CEO of Dollar Beard Club', 1, 'http://www.secretentourage.com/academy/chris-stoikos/'),
(12, 'Randall Pich', 3, 'http://localhost/menu/images/interviews/randall.jpg', 'Founder of Live Fit Apparel', 1, 'http://www.secretentourage.com/academy/randall-pich-lvft/'),
(13, 'Jon Crawford', 1, 'http://localhost/menu/images/interviews/jon.jpg', 'Founder of Storenvy', 1, 'http://www.secretentourage.com/academy/jon-crawford/'),
(14, 'Peter Beatie', 11, 'http://localhost/menu/images/interviews/peter.jpg', 'Creator of VideoRevolver', 1, 'http://www.secretentourage.com/academy/peter-beattie/'),
(16, 'Michael Luscher', 5, 'http://localhost/menu/images/interviews/michael.jpg', 'Founder of Point 3 Basketball', 1, 'http://www.secretentourage.com/academy/michael-luscher/');

-- --------------------------------------------------------

--
-- Table structure for table `interviewscat`
--

CREATE TABLE `interviewscat` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `interviewscat`
--

INSERT INTO `interviewscat` (`id`, `category`, `parent`, `href`) VALUES
(1, 'Apps', 1, 'http://localhost/menu/pages/academy/academy-apps.php'),
(2, 'Affiliate Marketing', 1, ''),
(3, 'Clothes', 1, 'http://localhost/menu/pages/academy/academy-clothes.php'),
(4, 'startup', 1, 'http://localhost/menu/pages/academy/academy-startup.php'),
(5, 'sports', 1, 'http://localhost/menu/pages/academy/academy-sports.php'),
(6, 'Automation', 1, ''),
(7, 'Entertainment', 1, 'http://localhost/menu/pages/academy/academy-entertainment.php'),
(8, 'Speaking', 1, 'http://localhost/menu/pages/academy/academy-speaking.php'),
(9, 'All Episodes', 0, ''),
(10, 'Author', 1, 'http://localhost/menu/pages/academy/academy-author.php'),
(11, 'Marketing', 1, 'http://localhost/menu/pages/academy/academy-marketing.php');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE `mainmenu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`id`, `menu`, `parent`, `href`) VALUES
(1, 'Home', 0, 'http://localhost/menu/Pages/home/home.php'),
(2, 'Academy', 0, 'http://localhost/menu/Pages/academy/academy.php'),
(3, 'Mastermind', 0, 'http://localhost/menu/Pages/mastermind/mastermind.php'),
(4, 'Club House', 0, 'http://localhost/menu/Pages/club-house/club-house.php'),
(5, 'Blog', 0, 'http://localhost/menu/Pages/blog/blog.php'),
(6, 'Forum', 0, 'http://localhost/menu/Pages/forum/index.php'),
(7, 'Resources', 1, 'http://localhost/menu/Pages/resources/resources.php'),
(8, 'About Us', 1, 'http://localhost/menu/Pages/about/about.php'),
(9, 'Contact', 1, 'http://localhost/menu/Pages/contact/contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `mastermind`
--

CREATE TABLE `mastermind` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `mastermind_title` varchar(255) NOT NULL,
  `mastermind_description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mastermind`
--

INSERT INTO `mastermind` (`id`, `category_id`, `mastermind_title`, `mastermind_description`, `image`) VALUES
(1, 2, 'How To Become a Forex Pro Trader', 'Learn Forex Through Correct Education', 'http://localhost/menu/Pages/mastermind/becomeaforextrader.jpg'),
(2, 1, 'How To Create a Million Dollar Business Course', '10 Steps To Build a Million Dollar Business', 'http://localhost/menu/Pages/mastermind/milliondollarbusiness.jpg'),
(3, 4, 'Real Estate Wholesaling', 'How To WholeSale Homes You Do Not Even Own Using Your Own Cash', 'http://localhost/menu/Pages/mastermind/realestate.jpg'),
(4, 3, 'Third Circle Theory Course', 'The Blueprint To Understanding How To See Beyong Yourself And Find Your Purpose As An Entrepreneur', 'http://localhost/menu/Pages/mastermind/tct.jpg'),
(5, 1, 'How To Start a Cloting Brand Course', 'How To Start a Cloting Brand From Scratch', 'http://localhost/menu/Pages/mastermind/clothingbrand.jpg'),
(6, 4, 'Sales 101 Course', 'How To Make Proper Sales', 'http://localhost/menu/Pages/mastermind/sales101course.jpg'),
(7, 2, 'Stock Trading', 'Coming Soon', 'http://localhost/menu/Pages/mastermind/stocktrading.jpg'),
(8, 1, 'Freedom Through Online Business', 'Coming Soon', 'http://localhost/menu/Pages/mastermind/freedomonlinebusiness.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mastermindcat`
--

CREATE TABLE `mastermindcat` (
  `id` int(11) NOT NULL,
  `category_title` varchar(150) NOT NULL,
  `category_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mastermindcat`
--

INSERT INTO `mastermindcat` (`id`, `category_title`, `category_description`) VALUES
(1, 'Business', 'Build a Dream Company'),
(2, 'Forex', 'Trade & Sell Money'),
(3, 'Mindset', 'Motivation & Inspiration'),
(4, 'Sales', 'The Most Important Skill'),
(5, 'Startup', 'The Meaning of Entrepreneurship');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_creator` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `topic_id`, `post_creator`, `post_content`, `post_date`) VALUES
(1, 1, 1, 2, 'Is there anyone interested in business now?', '2019-02-05 23:01:31'),
(2, 1, 2, 2, 'Hello. I am looking for advice about my marketing campaign.        \r\n        ', '2019-02-05 23:02:37'),
(3, 2, 3, 2, 'Let\'s talk how we can grow in life and improve our careers.', '2019-02-05 23:03:39'),
(4, 1, 2, 1, 'Let\'s talk about marketing.', '2019-02-05 23:09:17'),
(5, 1, 1, 1, 'I would like to increase and grow my business. Do you have any advice?', '2019-02-05 23:12:53'),
(6, 1, 4, 1, 'Hello. I am very interested in business. Let\'s exchange ideas and grow together.', '2019-02-05 23:14:18'),
(7, 4, 5, 1, 'Are there any motivated people here? Let\'s motivate each other. How do you motivate yourself?        \r\n        ', '2019-02-05 23:15:36'),
(8, 3, 6, 1, 'I am building a mobile phone app. Has anyone here any experience in mobile app development?        \r\n        ', '2019-02-05 23:16:34'),
(9, 3, 6, 3, 'Hi. I am a mobile app guru. How can I help you?', '2019-02-05 23:18:52'),
(10, 1, 1, 3, 'What kind of business are you guys running?', '2019-02-05 23:19:40'),
(11, 1, 2, 3, 'I have a great marketing plan. Are you interested?', '2019-02-05 23:20:26'),
(12, 2, 7, 3, 'My career is going extremely well. However, I would like to grow and learn new things. How can I do that?\r\n', '2019-02-05 23:21:28'),
(13, 1, 1, 4, 'I have a great business so far. And I also want to grow as you guys.', '2019-02-05 23:35:50'),
(14, 2, 7, 4, 'Hi. My career is going extremely well and I can help you.', '2019-02-05 23:36:35'),
(15, 4, 5, 4, 'I listen to motivational music.', '2019-02-05 23:37:20'),
(16, 3, 6, 4, 'Mobile app development is extremely important.', '2019-02-05 23:38:08'),
(17, 8, 8, 4, 'Do you guys participate in any masterminds?        \r\n        ', '2019-02-05 23:38:48'),
(18, 1, 2, 4, 'I would like to take part in this marketing topic.', '2019-02-06 00:45:37'),
(19, 2, 7, 1, 'Career building is very important.', '2019-02-06 00:49:09'),
(20, 1, 1, 3, 'Yes, let\'s exchange ideas here.', '2019-02-06 22:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `topic_title` varchar(150) NOT NULL,
  `topic_creator` int(11) NOT NULL,
  `topic_last_user` int(11) DEFAULT NULL,
  `topic_date` datetime NOT NULL,
  `topic_reply_date` datetime NOT NULL,
  `topic_views` int(11) NOT NULL DEFAULT '0',
  `topic_replies` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `category_id`, `topic_title`, `topic_creator`, `topic_last_user`, `topic_date`, `topic_reply_date`, `topic_views`, `topic_replies`) VALUES
(1, 1, 'Business Topic', 2, 3, '2019-02-05 23:01:31', '2019-02-06 22:12:03', 11, 4),
(2, 1, 'Marketing Plan', 2, 4, '2019-02-05 23:02:37', '2019-02-06 00:45:37', 7, 3),
(3, 2, 'Career Development', 2, NULL, '2019-02-05 23:03:39', '2019-02-05 23:03:39', 1, 0),
(4, 1, 'Business Power', 1, NULL, '2019-02-05 23:14:18', '2019-02-05 23:14:18', 1, 0),
(5, 4, 'Motivation', 1, 4, '2019-02-05 23:15:36', '2019-02-05 23:37:20', 3, 1),
(6, 3, 'My New App', 1, 4, '2019-02-05 23:16:34', '2019-02-05 23:38:08', 5, 2),
(7, 2, 'Great Career', 3, 1, '2019-02-05 23:21:28', '2019-02-06 00:49:09', 6, 2),
(8, 8, 'Networking', 4, NULL, '2019-02-05 23:38:48', '2019-02-05 23:38:48', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `hash`, `email`, `active`) VALUES
(1, 'kaloyan', '$2y$10$vRyXJZMerUnV5O1vXZLcsuoBI3wkNTD4phqsrVFPL9p/smcRgOdGC', 'b59c67bf196a4758191e42f76670ceba', 'nikolovk94@abv.bg', 1),
(2, 'vanko', '$2y$10$9EcAesznrLk03GEPpnGdNe/2cNkVCwRicvlCJpIeNRvM1B2R.aNNi', 'b59c67bf196a4758191e42f76670ceba', 'vankovankov99@gmail.com', 1),
(3, 'bob', '$2y$10$BzwZhYHycdXsJEHxgNBqnejDXaNdWJm63ijy3B/4thKXG2c0h9eya', '934b535800b1cba8f96a5d72f72f1611', 'robertsrapidreviews@gmail.com', 1),
(4, 'djn', '$2y$10$c5Uq9yzM/tezV1HwA9bGUuUKs1lnvUtB8yqJeC0hTFVDakZitU0mi', '2be9bd7a3434f7038ca27d1918de58bd', 'nikolovad2000@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogcategories` (`blogcategories`);

--
-- Indexes for table `blogcategories`
--
ALTER TABLE `blogcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `applicant` (`applicant`);

--
-- Indexes for table `ecommerce`
--
ALTER TABLE `ecommerce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ecommercecategories` (`ecommercecategories`);

--
-- Indexes for table `ecommercecategories`
--
ALTER TABLE `ecommercecategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories` (`categories`);

--
-- Indexes for table `interviewscat`
--
ALTER TABLE `interviewscat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastermind`
--
ALTER TABLE `mastermind`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `mastermindcat`
--
ALTER TABLE `mastermindcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `post_creator` (`post_creator`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `topic_creator` (`topic_creator`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogcategories`
--
ALTER TABLE `blogcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ecommerce`
--
ALTER TABLE `ecommerce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ecommercecategories`
--
ALTER TABLE `ecommercecategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `interviewscat`
--
ALTER TABLE `interviewscat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mastermind`
--
ALTER TABLE `mastermind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mastermindcat`
--
ALTER TABLE `mastermindcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`blogcategories`) REFERENCES `blogcategories` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`applicant`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `mastermindcat` (`id`),
  ADD CONSTRAINT `courses_ibfk_3` FOREIGN KEY (`topic_id`) REFERENCES `mastermind` (`id`);

--
-- Constraints for table `ecommerce`
--
ALTER TABLE `ecommerce`
  ADD CONSTRAINT `ecommerce_ibfk_1` FOREIGN KEY (`ecommercecategories`) REFERENCES `ecommercecategories` (`id`);

--
-- Constraints for table `interviews`
--
ALTER TABLE `interviews`
  ADD CONSTRAINT `interviews_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `interviewscat` (`id`);

--
-- Constraints for table `mastermind`
--
ALTER TABLE `mastermind`
  ADD CONSTRAINT `mastermind_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `mastermindcat` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`post_creator`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_creator`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
