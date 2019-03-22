---
layout: post-events
date-time: 2019-07-10 04:00:00 +0200
title: 'The automation solution for Webinars'
timezone: CET
subtitle: LIMITED seats available join now
ctalink: https://www.eventbrite.com/e/unreal-fest-europe-2019-tickets-54533571380
presenter: Pavel Doležal
location: WeWork London, Salisburry Road 321, LFC18
country: uk
background-image: ''
date: 2019-02-15 16:53:52 +0100

---
We recently had a customer who asked for a basic recommendation as a part of proof of concept, whether Keboola Connection is the right fit for them. The dataset we got to work with came from a CRM system, and contained a few thousand anonymized rows (4600-ish, actually) of won opportunities which effectively represented product-customer relations (what customers had purchased which products). So, pretty much ready-to-go data for the Basket Analysis app, which has been waiting for just this opportunity in the Keboola App Store. Sounded like good challenge - how can we turn this into a basic recommendation engine?

> I built a quick transformation to filter out the won opportunities only, and just the needed columns.

Basket analysis, simply put, looks at groups of items (baskets), and assigns a few important values on any combinations of items that are found in the primary dataset. The two most descriptive values are called "support" - the frequency in which a given combination of items presents itself in the dataset or its segment, and "lift" - the likelihood of items in the combination to appear together. If you want to go deeper, here's a good resource (it's a bit heavy reading, you've been warned). Now, this "lift" value is interesting - we can loosely translate the likelihood of the items being together as the likelihood that the customer may be interested in such combination.