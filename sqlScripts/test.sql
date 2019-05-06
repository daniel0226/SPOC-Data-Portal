#this script populates the database
insert into users (username, password, enabled, email) values ('user', '1234', true, "jhroach14@gmail.com");

insert into photos (photo_path, photo_text) values ("../img/pic1.jpg", "Hyper Spectral Image 1");
insert into photos (photo_path, photo_text) values ("../img/pic2.jpg", "Hyper Spectral Image 2");
insert into photos (photo_path, photo_text) values ("../img/pic3.jpg", "Hyper Spectral Image 3");
insert into photos (photo_path, photo_text) values ("../img/pic4.png", "Hyper Spectral Image 4");
insert into photos (photo_path, photo_text) values ("../img/pic5.jpg", "Hyper Spectral Image 5");

insert into blog_posts (post_title, post_date, post_text) values ("Sappelo Island 1", "March 23, 2019", "Here is a hyper spectral image of the highlands of Sappelo Island off the georgia coast. The University of Georgia preforms a lot of important research there. This data will help scientists monitor the health of ecosystems and the effects of climate change");
insert into blog_posts (post_title, post_date, post_text) values ("Sappelo Island 2", "March 23, 2019", "Here is a hyper spectral image of the lowlands of Sappelo Island off the georgia coast. The University of Georgia preforms a lot of important research there. This data will help scientists monitor the health of ecosystems and the effects of climate change. These low lying wetlands are especially vunlerable to the effects of climate change.");
insert into blog_posts (post_title, post_date, post_text) values ("North Georgia Farmland", "April 15, 2019", "Here is a hyper spectral image of farmland just outside of Athens Georgia. This Image is a good example of how different kinds of vegetation look extremely different in the near infared band. Researchers at UGA will use data like this to help farmers protect the environment.");
insert into blog_posts (post_title, post_date, post_text) values ("Oconee River", "May 1, 2019", "This is a hyper spectral photo of the oconee river as it runs south of athens. The red and green areas are human structures, which reflect infared light very differently than vegetation");
insert into blog_posts (post_title, post_date, post_text) values ("Appalachain Foothills", "March 23, 2019", "This is a hyper spectral of the north georgia foothills. The spectral bands used in this image were choosen to distinguish between different soil and geology types");

insert into archive_links (link_link, link_text) values ("#", "Raw data 1");
insert into archive_links (link_link, link_text) values ("#", "Raw data 2");
insert into archive_links (link_link, link_text) values ("#", "Raw data 3");
insert into archive_links (link_link, link_text) values ("#", "Raw data 4");
insert into archive_links (link_link, link_text) values ("#", "Raw data 5");
