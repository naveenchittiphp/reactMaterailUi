Image listing is widely used for the recipy website.

Lets create a new component for the image list.

For the image list we have to use the stack component instead of the div tag.

Now import the ImageList and ImageListItem 

import * as React from 'react';
import ImageList from '@mui/material/ImageList';
import ImageListItem from '@mui/material/ImageListItem';

Now inoveke the image list component 

for the ImageList we have to specify the widht and height 
How many columns in the image grid and Hight of the grid
<Stack>
        <ImageList sx={{width:'500',height:'450'}} columns={3} height={164} >

        </ImageList>
    </Stack>

Now define the list of the image 

const banners = [
        {image:"http://localhost/politiciansIndia/images/1.jpeg",name:"News 1"},
        {image:"http://localhost/politiciansIndia/images/1.jpeg",name:"News 1"},
        {image:"http://localhost/politiciansIndia/images/1.jpeg",name:"News 1"},
        {image:"http://localhost/politiciansIndia/images/1.jpeg",name:"News 1"}
    ];

and define the map for the image 

 <ImageList  cols={2} sx={{width:'500',height:'450'}} height={164} >
      {itemData.map(({img,title}) => (
        <ImageListItem key={img}>
          <img
            src={`${img}?w=164&h=164&fit=crop&auto=format`}
            srcSet={`${img}?w=164&h=164&fit=crop&auto=format&dpr=2 2x`}
            alt={title}
            loading="lazy"
          />
        </ImageListItem>
      ))}
    </ImageList>

In this we have to specify all the properties 

List Type : woven 
---------------------

<Stack spacing={4}>
         <ImageList  cols={4} variant='woven' gap={8}>
      {itemData.map(({img,title}) => (
        <ImageListItem key={img}>
          <img
            src={`${img}`}
            srcSet={`${img}`}
            alt={title}
            loading="lazy"
          />
        </ImageListItem>
      ))}
    </ImageList>
    </Stack>

for the varient woven we have to specify by 'variant' attribute 
and we have to remove other properties 
it will only contain cols , gap and variant .

List Type 
-----------
For this list we have to place all the code in the box component.
we can place the style on Box 
and mention the variant as masonary 

<Box sx={{width:400,height:500,overflowY:'scroll'}}>
    <Stack spacing={4}>
         <ImageList  cols={4} variant='masonry' gap={8}>
      {itemData.map(({img,title}) => (
        <ImageListItem key={img}>
          <img
            src={`${img}`}
            srcSet={`${img}`}
            alt={title}
            loading="lazy"
          />
        </ImageListItem>
      ))}
    </ImageList>
    </Stack>
    </Box>

Displaying title over image:
----------------------------
<Box >
    <Stack spacing={4}>
         <ImageList  cols={2} variant='masonry' gap={8}>
      {itemData.map(({img,title}) => (
        <ImageListItem key={img}>
          <img
            src={`${img}`}
            srcSet={`${img}`}
            alt={title}
            loading="lazy"
          />
          <ImageListItemBar title={title} />
        </ImageListItem>
      ))}
    </ImageList>
    </Stack>
    </Box>

we can display the title over the image by using 'ImageListItemBar'


import * as React from 'react';
import {Stack, ImageList,ImageListItem,Box,ImageListItemBar}from '@mui/material';


const itemData = [
    {
      img: 'http://localhost/politiciansIndia/images/1.jpeg',
      title: 'Breakfast',
    },
    {
      img: 'http://localhost/politiciansIndia/images/1.jpeg',
      title: 'Burger',
    },
    {
      img: 'http://localhost/politiciansIndia/images/1.jpeg',
      title: 'Camera',
    },
    {
      img: 'http://localhost/politiciansIndia/images/1.jpeg',
      title: 'Coffee',
    }
  ];


export default function HomeImgBanner() {
  return (<>
  <Box >
    <Stack spacing={4}>
         <ImageList  cols={2} variant='masonry' gap={8}>
      {itemData.map(({img,title}) => (
        <ImageListItem key={img}>
          <img
            src={`${img}`}
            srcSet={`${img}`}
            alt={title}
            loading="lazy"
          />
          <ImageListItemBar title={title} />
        </ImageListItem>
      ))}
    </ImageList>
    </Stack>
    </Box>
    </>);
}


