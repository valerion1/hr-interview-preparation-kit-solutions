
func rotLeft(a []int32, d int32) []int32 {

    rightSlice := a[:d]
    leftSlice := a[d:len(a)]

    return append(leftSlice, rightSlice...)
}
