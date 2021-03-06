<?php
namespace Sylapi\Feeds\Heureka\Models;

use Sylapi\Feeds\Heureka\Feed;
use JMS\Serializer\Annotation as Serializer;
use Sylapi\Feeds\Contracts\ProductSerializer;

/**
 * @Serializer\XmlRoot("SHOPITEM")
 * @Serializer\AccessType("public_method")
 */

class Product implements ProductSerializer
{
    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("ITEM_ID")
     */
    private $id;
    
    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("PRODUCT")
     */
    private $title;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("DESCRIPTION")
     */
    private $description;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("URL")
     */
    private $link;

    /**
     * @Serializer\Type("string") 
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("IMGURL")
     */
    private $imageLink;

    /**
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\XmlList(inline = true, entry = "IMGURL_ALTERNATIVE")
     */
    private $additionalImageLinks;    

    /**
     * @Serializer\Type("double")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("PRICE_VAT")
     * @Serializer\Exclude(if="object.getSalePrice() !== null")
     */
    private $price;

    /**
     * @Serializer\Type("double")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("PRICE_VAT")
     */
    private $salePrice;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("CATEGORYTEXT")
     */
    private $productCategory;  

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("MANUFACTURER")
     */
    private $manufacturer;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("BRAND")
     */
    private $brand;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("EAN")
     */
    private $gtin;  

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("PRODUCTNO")
     */
    private $mpn;

    /**
     * @Serializer\Type("integer")
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SerializedName("EROTIC")
     */
    private $adult;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("ITEMGROUP_ID")
     */
    private $itemGroupId;
    
    /**
     * @Serializer\Type("Sylapi\Feeds\Heureka\Models\Shipping")
     * @Serializer\SerializedName("DELIVERY")
     */
    private $shipping;
    
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DELIVERY_DATE")
     */
    private $maxHandlingTime;  

    /**
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\XmlList(inline = true, entry = "PARAM")
     */
    private $productDetails;

    /**
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\XmlList(inline = true, entry = "SPECIAL_SERVICE")
     */
    private $productHighlights;    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\XmlElement(cdata=true)
     * @Serializer\SerializedName("PRODUCTNAME")
     * @return string
     */
    public function getProductName()
    {
        return $this->title;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }    

    /**
     * Get the value of imageLink
     */ 
    public function getImageLink()
    {
        return $this->imageLink;
    }

    /**
     * Set the value of imageLink
     *
     * @return  self
     */ 
    public function setImageLink($imageLink)
    {
        $this->imageLink = $imageLink;

        return $this;
    }

    /**
     * Get the value of additionalImageLinks
     */ 
    public function getAdditionalImageLinks()
    {
        return $this->additionalImageLinks;
    }

    /**
     * Set the value of additionalImageLinks
     *
     * @return  self
     */ 
    public function setAdditionalImageLinks($additionalImageLinks)
    {
        $this->additionalImageLinks = $additionalImageLinks;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of salePrice
     */ 
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Set the value of salePrice
     *
     * @return  self
     */ 
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get the value of productCategory
     */ 
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Set the value of productCategory
     *
     * @return  self
     */ 
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }


    /**
     * Get the value of manufacturer
     */ 
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set the value of manufacturer
     *
     * @return  self
     */ 
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of gtin
     */ 
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * Set the value of gtin
     *
     * @return  self
     */ 
    public function setGtin($gtin)
    {
        $this->gtin = $gtin;

        return $this;
    }

    /**
     * Get the value of mpn
     */ 
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * Set the value of mpn
     *
     * @return  self
     */ 
    public function setMpn($mpn)
    {
        $this->mpn = $mpn;

        return $this;
    }

    /**
     * Get the value of adult
     */ 
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Set the value of adult
     *
     * @return  self
     */ 
    public function setAdult($adult)
    {
        $this->adult = $adult;

        return $this;
    }

    /**
     * Get the value of itemGroupId
     */ 
    public function getItemGroupId()
    {
        return $this->itemGroupId;
    }

    /**
     * Set the value of itemGroupId
     *
     * @return  self
     */ 
    public function setItemGroupId($itemGroupId)
    {
        $this->itemGroupId = $itemGroupId;

        return $this;
    }

    /**
     * Get the value of shipping
     */ 
    public function getShipping()
    {
        return $this->shipping;
    }


    /**
     * Set the value of shipping
     *
     * @return  self
     */ 
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get the value of maxHandlingTime
     */ 
    public function getMaxHandlingTime()
    {
        return $this->maxHandlingTime;
    }

    /**
     * Set the value of maxHandlingTime
     *
     * @return  self
     */ 
    public function setMaxHandlingTime($maxHandlingTime)
    {
        $this->maxHandlingTime = $maxHandlingTime;

        return $this;
    }

    /**
     * Get the value of productDetails
     */ 
    public function getProductDetails()
    {
        return $this->productDetails;
    }

    /**
     * Set the value of productDetails
     *
     * @return  self
     */ 
    public function setProductDetails($productDetails)
    {
        $this->productDetails = $productDetails;

        return $this;
    } 

    /**
     * Get the value of productHighlights
     */ 
    public function getProductHighlights()
    {
        return $this->productHighlights;
    }

    /**
     * Set the value of productHighlights
     *
     * @return  self
     */ 
    public function setProductHighlights($productHighlights)
    {
        $this->productHighlights = $productHighlights;

        return $this;
    }

    public function make(\Sylapi\Feeds\Models\Product $product): self
    {
        $item  = new self;

        $itemVars = array_keys(get_class_vars(self::class));
    
        foreach($itemVars as $itemVar) {
            $getterName = 'get'.ucfirst($itemVar);
            $setterName = 'set'.ucfirst($itemVar);

            if(method_exists($product, $getterName) && method_exists($item, $setterName)) {
                $elem =  $product->{$getterName}();
                if(is_object($elem)) {
                    switch(get_class($elem)) {
                        case 'Sylapi\Feeds\Models\Shipping' :
                            $elem = (new Shipping)->make($elem);
                        break;                      
                    }
                }
                
                if($itemVar === 'productCategory') {
                    if(is_array($elem) && isset($elem[Feed::NAME])) {
                        $elem = $elem[Feed::NAME];
                    } else {
                        $elem = null;
                    }
                }

                if($itemVar === 'productDetails') {
                    if(isset($elem[Feed::NAME]) && is_array($elem[Feed::NAME])) {
                        $elems = [];
                        foreach($elem[Feed::NAME] as $pd){
                            $elems[] = (new ProductDetail)->make($pd);
                        }
                        $elem = $elems;
                    } else {
                        $elem = null;
                    }
                }

                $item->{$setterName}($elem);  
            }
        }

        return $item;
    }
}
