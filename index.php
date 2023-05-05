<?php
$base64string = "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIoAuAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAECBQAGB//EADsQAAIBAwMCBQEGBQMCBwAAAAECAwAEERIhMQVBEyJRYXGBFDKRobHwI0LB0eEzUvEGFTRDYnKCwtL/xAAZAQEBAQEBAQAAAAAAAAAAAAAAAQIDBAX/xAAhEQEBAAMAAgIDAQEAAAAAAAAAAQIREgMhEzEEQWFRIv/aAAwDAQACEQMRAD8AThhwKaSPFGjix2omj2r29LyX0VGimdNRoqdNcgaK7RR9NToqdryBortFH0VOms9ryX0VOmj6a7TTs5A012mj6a7TWe15A012ij6ajTTteQdNdpo2Pao01OjgIpUaaNpqMVO14BK12mi4qMU7OFAKo6A0bFdinZwz5oq6m5FrqdnB5VwKnFWUqwBBBFcSO1ZubUwqmmu01XWRtkVcMCKnbfx1GmuxVq6p2vxq6anAoVzcLboG5JOBSst/4hV95D/AFpkQtHyT7Gqkg7ZxXDg1RaxtTEoBAyNgB5hXAMRjO6nB96rMT4cYz/KKtB/qCrsDfKcnzA8+tT4hJw/D8fWrSf6DfP9aH";
$uploadpath   = 'upload/images/';
$parts        = explode(";base64,", $base64string);
$imageparts   = explode("/", @$parts[0]);
$imagetype    = $imageparts[1];
$imagebase64  = base64_decode($parts[1]);
$file         = $uploadpath . uniqid() . $imagetype;
$status = file_put_contents($file, $imagebase64);
