# Social Media

## Examples for Facebook

### How publishing a post to Facebook should work.

```php
/** @var FacebookPostPublish $post */
$post = new FacebookPostPublish(
    $title,
    $description,
    $url
);

/** @var FacebookService $service */
$service = new FacebookService();

// dispatch new Event
$this->get('event_listener')->dispatch(
    SocialMediaPostPublishEvent(
        $post,
        $service
    )
);
```

### How unpublishing a post from facebook should work.

```php
// facebook post id
$identifier = '126577990374899_1489744286461266';

/** @var FacebookPostUnpublish $post */
$post = new FacebookPostUnpublish(
    $identifier
);

/** @var FacebookService $service */
$service = new FacebookService();

// dispatch new Event
$this->get('event_listener')->dispatch(
    SocialMediaPostUnpublishEvent(
        $post,
        $service
    )
);
```

### How publishing an album to Facebook should work.

```php
/** @var FacebookAlbumPublish $album */
$album = new FacebookAlbumPublish(
    $title,
    $description,
    $images
);

/** @var FacebookService $service */
$service = new FacebookService();

// dispatch new Event
$this->get('event_listener')->dispatch(
    SocialMediaAlbumPublishEvent(
        $album,
        $service
    )
);
```

### How unpublishing an album to Facebook should work.

```php
// facebook album id
$identifier = '126577990374899_1489744286461266';

/** @var FacebookAlbumUnpublish $album */
$album = new FacebookAlbumUnpublish(
    $identifier
);

/** @var FacebookService $service */
$service = new FacebookService();

// dispatch new Event
$this->get('event_listener')->dispatch(
    SocialMediaAlbumUnpublishEvent(
        $album,
        $service
    )
);
```

## How a Fork CMS Module should use the SocialMedia library.

> Example: blog module

* In Add.php or Edit.php, we should **dispatch Event**
* We should add an EventListener per SocialMediaPlatform, which uses code form the above examples.

## What about a module using multiple social media platforms

* We should create an Event listener for every separate social media platform. Because titles or descriptions or ... should be different.
